<?php

namespace App\Http\Requests\Config;

use App\Http\Requests\_Abstract\ApiBaseRequest;

class ConfigUpdateRequest extends ApiBaseRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'nullable|string|max:255',
            'name' => 'nullable|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'zalo' => 'nullable|string|max:255',
            'messenger' => 'nullable|string|max:255',
            'email_order_enabled' => 'nullable|boolean',
            'telegram_order_enabled' => 'nullable|boolean',
            'email_order_recipient' => 'nullable|email|max:255',
            'gmail_smtp_host' => 'nullable|string|max:255',
            'gmail_smtp_port' => 'nullable|integer|min:1|max:65535',
            'gmail_smtp_username' => 'nullable|email|max:255',
            'gmail_smtp_password' => 'nullable|string|max:255',
            'gmail_smtp_encryption' => 'nullable|in:tls,ssl',
            'telegram_bot_token' => 'nullable|string|max:255',
            'telegram_chat_id' => 'nullable|string|max:255',
            'google_distance_matrix_api_key' => 'nullable|string|max:255',
            'google_distance_matrix_enabled' => 'nullable|boolean',
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => 'Tiêu đề',
            'name' => 'Tên',
            'logo' => 'Logo',
            'description' => 'Mô tả',
            'address' => 'Địa chỉ',
            'phone' => 'Số điện thoại',
            'email' => 'Email',
            'facebook' => 'Facebook',
            'zalo' => 'Zalo',
            'messenger' => 'Messenger',
            'email_order_enabled' => 'Bật gửi email',
            'telegram_order_enabled' => 'Bật gửi Telegram',
            'email_order_recipient' => 'Email nhận thông báo',
            'gmail_smtp_host' => 'Gmail SMTP Host',
            'gmail_smtp_port' => 'Gmail SMTP Port',
            'gmail_smtp_username' => 'Gmail SMTP Username',
            'gmail_smtp_password' => 'Gmail SMTP Password',
            'gmail_smtp_encryption' => 'Gmail SMTP Encryption',
            'telegram_bot_token' => 'Telegram Bot Token',
            'telegram_chat_id' => 'Telegram Chat ID',
            'google_distance_matrix_api_key' => 'Google Distance Matrix API Key',
            'google_distance_matrix_enabled' => 'Bật tính giá Google Distance Matrix',
        ];
    }

    public function messages(): array
    {
        return [
            'nullable' => 'Trường :attribute không được để trống',
            'string' => 'Trường :attribute phải là chuỗi',
            'max' => 'Trường :attribute không được quá :max ký tự',
            'url' => 'Trường :attribute phải là URL',
            'image' => 'Trường :attribute phải là ảnh',
            'mimes' => 'Trường :attribute phải là ảnh',
        ];
    }
}
