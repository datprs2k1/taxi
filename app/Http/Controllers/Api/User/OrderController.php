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
            // TEMPORARILY DISABLED: Price calculation and distance
            // $distance = google_distance($request->start_place, $request->end_place);
            // $seats = $request->numseats ?? 4;
            // $round_trip = $request->roundtrip == 'true' ? true : false;
            // $wait_time = $request->waittime ?? 0;
            // if ($round_trip) {
            //     $distance = $distance + google_distance($request->end_place, $request->start_place);
            // }
            // $distance = $distance / 1000;
            // $quoted_price = $this->calculate_price($distance, $seats, $round_trip, $wait_time);

            // Return default price of 0 (will be set manually later)
            return response()->json([
                'quoted_price' => 0,
                'status' => 'true'
            ], 200);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function order(Request $request)
    {
        // Clean and prepare data
        $phone = preg_replace('/[^0-9]/', '', $request->input('phone', ''));
        $name = trim($request->input('name', ''));
        $startPlace = trim($request->input('start_place', ''));
        $endPlace = trim($request->input('end_place', ''));
        
        // Validate required fields
        $request->validate([
            'name' => 'required|string|min:2|max:100',
            'phone' => 'required|string',
            'start_place' => 'required|string|min:3',
            'end_place' => 'required|string|min:3',
        ], [
            'name.required' => 'Vui lòng nhập họ và tên',
            'name.min' => 'Họ và tên phải có ít nhất 2 ký tự',
            'name.max' => 'Họ và tên không được vượt quá 100 ký tự',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'start_place.required' => 'Vui lòng nhập điểm đi',
            'start_place.min' => 'Điểm đi phải có ít nhất 3 ký tự',
            'end_place.required' => 'Vui lòng nhập điểm đến',
            'end_place.min' => 'Điểm đến phải có ít nhất 3 ký tự',
        ]);
        
        // Validate phone format after cleaning
        if (!preg_match('/^[0-9]{10,11}$/', $phone)) {
            return response()->json([
                'error' => 'Validation failed',
                'messages' => [
                    'phone' => ['Số điện thoại không hợp lệ (10-11 chữ số)']
                ]
            ], 422);
        }
        
        return DbTransactions()->addCallbackJson(function () use ($request, $phone, $name, $startPlace, $endPlace) {
            $data = $request->all();
            
            // Use cleaned values
            $data['phone'] = $phone;
            $data['name'] = $name;
            $data['start_place'] = $startPlace;
            $data['end_place'] = $endPlace;
            
            // TEMPORARILY DISABLED: Distance calculation
            // $distance = google_distance($data['start_place'], $data['end_place']);
            // $round_trip = $data['round_trip'] == 'true' ? true : false;
            // if ($round_trip) {
            //     $distance = $distance + google_distance($data['end_place'], $data['start_place']);
            // }
            // $distance = $distance / 1000;
            // $data['price'] = $this->calculate_price($distance, $data['num_seats'], $round_trip, $data['wait_time'] ?? 0);
            // $data['distance'] = $distance;
            
            // Set default values (will be set manually later)
            $data['distance'] = 0;
            $data['price'] = 0;
            
            $data['stop_points'] = collect($data['stop_points'] ?? []) ?? collect([]);
            $data['round_trip'] = isset($data['round_trip']) ? ($data['round_trip'] == 'true' ? true : false) : false;
            $data['long_trip'] = isset($data['long_trip']) ? ($data['long_trip'] == 'true' ? true : false) : false;
            $data['vat'] = isset($data['vat']) ? ($data['vat'] == 'true' ? true : false) : false;
            $data['status'] = 0;
            $data['code'] = Str::random(6) . rand(1000, 9999);
            
            // Handle wait_time if not provided
            if (!isset($data['wait_time'])) {
                $data['wait_time'] = 0;
            }
            
            // Map wait_time to waittime for database
            $data['waittime'] = $data['wait_time'];
            unset($data['wait_time']);
            
            $order = Order::create($data);
            SendNotification::dispatch($order);
            return $order;
        });
    }
}
