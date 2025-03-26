<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Jobs\SendNotification;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    protected function calculate_price($distance, $seats, $round_trip = false)
    {
        $price_per_km = 0;

        // For distances less than 10km, use a fixed price of 12000 per km
        if ($distance < 10) {
            $price_per_km = 12000;
        } else {
            // For distances >= 10km, use seat-based pricing
            switch ($seats) {
                case 5:
                    $price_per_km = $round_trip ? 5500 : 9000;
                    break;
                case 7:
                    $price_per_km = $round_trip ? 6500 : 10000;
                    break;
            }
        }

        return $distance * $price_per_km;
    }

    public function price(Request $request)
    {
        try {
            $distance = google_distance($request->start_place, $request->end_place);
            $seats = $request->numseats ?? 4;
            $round_trip = $request->roundtrip == 'true' ? true : false;

            if ($round_trip) {
                $distance = $distance + google_distance($request->end_place, $request->start_place);
            }

            $distance = $distance / 1000;

            $quoted_price = $this->calculate_price($distance, $seats, $round_trip);

            return response()->json([
                'quoted_price' => $quoted_price,
                'status' => 'true'
            ], 200);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function order(Request $request)
    {
        return DbTransactions()->addCallbackJson(function () use ($request) {
            $data = $request->all();
            $distance = google_distance($data['start_place'], $data['end_place']);
            $distance = $distance / 1000;
            $seats = $data['seats'] ?? 4;
            $round_trip = $data['round_trip'] == 'true' ? true : false;

            $data['price'] = $this->calculate_price($distance, $seats, $round_trip);
            $data['distance'] = $distance;
            $data['stop_points'] = collect($data['stop_points']) ?? collect([]);
            $data['round_trip'] = $round_trip;
            $data['long_trip'] = $data['long_trip'] == 'true' ? true : false;
            $data['vat'] = $data['vat'] == 'true' ? true : false;
            $data['status'] = 0;
            $data['code'] = Str::random(6) . rand(1000, 9999);
            $order = Order::create($data);
            SendNotification::dispatch($order);
            return $order;
        });
    }
}
