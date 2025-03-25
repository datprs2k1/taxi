<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected function calculate_price($distance, $seats, $round_trip = false)
    {
        $price_per_km = 0;

        switch ($seats) {
            case 4:
                $price_per_km = 8000;
                break;
            case 5:
                $price_per_km = 8500;
                break;
            case 7:
                $price_per_km = 9000;
                break;
            default:
                $price_per_km = 8000; // Default to 4 seats price
        }

        if ($round_trip) {
            $price_per_km = 6500;
        }

        return $distance * $price_per_km;
    }

    public function price(Request $request)
    {
        try {
            $distance = google_distance($request->start_place, $request->end_place);
            $distance = $distance / 1000;
            $seats = $request->numseats ?? 4;
            $round_trip = $request->roundtrip == 'true' ? true : false;

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
            $order = Order::create($data);
            return $order;
        });
    }
}
