<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Jobs\SendContactNotification;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Clean and prepare data
        $phone = preg_replace('/[^0-9]/', '', $request->input('phone', ''));
        $name = trim($request->input('name', ''));
        $message = trim($request->input('message', ''));
        
        // Validate required fields
        $request->validate([
            'name' => 'required|string|min:2|max:100',
            'phone' => 'required|string',
            'message' => 'required|string|min:10|max:1000',
        ], [
            'name.required' => 'Vui lòng nhập họ và tên',
            'name.min' => 'Họ và tên phải có ít nhất 2 ký tự',
            'name.max' => 'Họ và tên không được vượt quá 100 ký tự',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'message.required' => 'Vui lòng nhập nội dung',
            'message.min' => 'Nội dung phải có ít nhất 10 ký tự',
            'message.max' => 'Nội dung không được vượt quá 1000 ký tự',
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
        
        return DbTransactions()->addCallbackJson(function () use ($phone, $name, $message) {
            $data = [
                'name' => $name,
                'phone' => $phone,
                'message' => $message,
                'code' => Str::random(6) . rand(1000, 9999),
                'status' => 0
            ];
            
            $contact = Contact::create($data);
            SendContactNotification::dispatch($contact);
            
            return [
                'success' => true,
                'message' => 'Cảm ơn bạn đã liên hệ! Chúng tôi sẽ phản hồi sớm nhất.',
                'contact' => $contact
            ];
        });
    }
}

