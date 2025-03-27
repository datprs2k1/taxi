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
    protected function calculate_price($distance, $seats, $round_trip = false, $wait_time = 0)
    {
        $price = 0;

        // For distances less than 10km, use a fixed price of 12000 per km
        if ($distance < 10) {
            $price = $distance * 12000;
        } else {
            // For distances >= 10km, use tiered pricing based on distance and seats
            if (!$round_trip) {
                if ($seats == 5) {
                    if ($distance <= 50) {
                        $price = $distance * 10000;
                    } elseif ($distance <= 100) {
                        $price = 50 * 10000 + ($distance - 50) * 9000;
                    } elseif ($distance <= 150) {
                        $price = 50 * 10000 + 50 * 9000 + ($distance - 100) * 8000;
                    } else {
                        $price = 50 * 10000 + 50 * 9000 + 50 * 8000 + ($distance - 150) * 7000;
                    }
                } elseif ($seats == 7) {
                    if ($distance <= 50) {
                        $price = $distance * 11000;
                    } elseif ($distance <= 100) {
                        $price = 50 * 11000 + ($distance - 50) * 10000;
                    } elseif ($distance <= 150) {
                        $price = 50 * 11000 + 50 * 10000 + ($distance - 100) * 9000;
                    } else {
                        $price = 50 * 11000 + 50 * 10000 + 50 * 9000 + ($distance - 150) * 7000;
                    }
                }
            } else {
                // Keep existing round trip logic
                switch ($seats) {
                    case 5:
                        $price = $distance * 6800;
                        break;
                    case 7:
                        $price = $distance * 7800;
                        break;
                }
            }
        }

        // Add wait time charges for round trips
        if ($round_trip && $wait_time > 0) {
            // First hour is free for round trips
            if ($wait_time > 1) {
                // Calculate additional wait time beyond the first hour
                $additional_wait_time = ceil($wait_time - 1);
                // Charge 40000 per additional hour
                $price += $additional_wait_time * 40000;
            }
        }

        // Round the price to the nearest thousand
        return round($price / 1000) * 1000;
    }

    public function price(Request $request)
    {
        try {
            $distance = google_distance($request->start_place, $request->end_place);
            $seats = $request->numseats ?? 4;
            $round_trip = $request->roundtrip == 'true' ? true : false;
            $wait_time = $request->waittime ?? 0;
            if ($round_trip) {
                $distance = $distance + google_distance($request->end_place, $request->start_place);
            }

            $distance = $distance / 1000;

            $quoted_price = $this->calculate_price($distance, $seats, $round_trip, $wait_time);

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
            $round_trip = $data['round_trip'] == 'true' ? true : false;

            if ($round_trip) {
                $distance = $distance + google_distance($data['end_place'], $data['start_place']);
            }

            $distance = $distance / 1000;

            $data['price'] = $this->calculate_price($distance, $data['num_seats'], $round_trip, $data['wait_time']);
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
