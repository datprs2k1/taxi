<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\User\OrderController as ApiOrderController;
use Illuminate\Http\Request;

class MapController extends Controller
{
    protected $apiOrderController;

    public function __construct()
    {
        $this->apiOrderController = new ApiOrderController();
    }

    public function handle(Request $request)
    {
        $action = $request->input('do');

        switch ($action) {
            case 'requestPrice':
                return $this->handleRequestPrice($request);
            case 'submitInfo':
                return $this->handleSubmitInfo($request);
            default:
                return response()->json(['error' => 'Invalid action'], 400);
        }
    }

    protected function handleRequestPrice(Request $request)
    {
        // Map old request format to new API format
        $apiRequest = new Request([
            'start_place' => $request->input('start_place'),
            'end_place' => $request->input('end_place'),
            'numseats' => $request->input('numseats'),
            'roundtrip' => $request->input('roundtrip'),
            'waittime' => $request->input('waittime', 0),
        ]);

        $response = $this->apiOrderController->price($apiRequest);
        
        // Return in old format for compatibility
        if ($response instanceof \Illuminate\Http\JsonResponse) {
            $data = $response->getData(true);
            return response()->json([
                'quoted_price' => $data['quoted_price'] ?? 0,
                'status' => $data['status'] ?? 'true'
            ]);
        }
        
        return $response;
    }

    protected function handleSubmitInfo(Request $request)
    {
        // Clean phone number (remove non-digit characters)
        $phone = preg_replace('/[^0-9]/', '', $request->input('customer_phone', ''));
        $name = trim($request->input('customer_name', ''));
        $startPlace = trim($request->input('start_place', ''));
        $endPlace = trim($request->input('end_place', ''));
        
        // Validate required fields before mapping
        $request->validate([
            'customer_name' => 'required|string|min:2|max:100',
            'customer_phone' => 'required|string',
            'start_place' => 'required|string|min:3',
            'end_place' => 'required|string|min:3',
        ], [
            'customer_name.required' => 'Vui lòng nhập họ và tên',
            'customer_name.min' => 'Họ và tên phải có ít nhất 2 ký tự',
            'customer_name.max' => 'Họ và tên không được vượt quá 100 ký tự',
            'customer_phone.required' => 'Vui lòng nhập số điện thoại',
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
                    'customer_phone' => ['Số điện thoại không hợp lệ (10-11 chữ số)']
                ]
            ], 422);
        }
        
        // Map old request format to new API format
        $apiRequest = new Request([
            'start_place' => $startPlace,
            'end_place' => $endPlace,
            'num_seats' => $request->input('numseats'),
            'round_trip' => $request->input('roundtrip'),
            'wait_time' => $request->input('waittime', 0),
            'vat' => $request->input('vat'),
            'long_trip' => $request->input('longtrip'),
            'name' => $name, // Map customer_name to name
            'phone' => $phone, // Map customer_phone to phone (cleaned)
            'pickup_time' => $request->input('pickuptime'),
            'promocode' => $request->input('promocode'),
            'stop_points' => $request->input('stop_points', []),
        ]);

        try {
            $response = $this->apiOrderController->order($apiRequest);
            
            // Return in old format for compatibility
            if ($response instanceof \Illuminate\Http\JsonResponse) {
                $data = $response->getData(true);
                return response()->json($data);
            }
            
            return $response;
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'error' => 'Validation failed',
                'messages' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Đã có lỗi xảy ra: ' . $e->getMessage()
            ], 500);
        }
    }
}

