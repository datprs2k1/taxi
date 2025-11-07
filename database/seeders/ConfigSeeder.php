<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'key' => 'title',
                'value' => 'Trang chủ',
            ],
            [
                'key' => 'name',
                'value' => 'Trang chủ',
            ],
            [
                'key' => 'logo',
                'value' => 'logo.png',
            ],
            [
                'key' => 'description',
                'value' => 'Trang chủ',
            ],
            [
                'key' => 'address',
                'value' => '123 Đường ABC, Quận 1, TP.HCM',
            ],
            [
                'key' => 'phone',
                'value' => '0123456789',
            ],
            [
                'key' => 'email',
                'value' => 'info@example.com',
            ],
            [
                'key' => 'facebook',
                'value' => 'https://www.facebook.com/example',
            ],
            [
                'key' => 'zalo',
                'value' => 'https://zalo.me/example',
            ],
            [
                'key' => 'messenger',
                'value' => 'https://m.me/example',
            ],
            [
                'key' => 'email_order_enabled',
                'value' => '0',
            ],
            [
                'key' => 'telegram_order_enabled',
                'value' => '1',
            ],
            [
                'key' => 'email_order_recipient',
                'value' => '',
            ],
            [
                'key' => 'gmail_smtp_host',
                'value' => 'smtp.gmail.com',
            ],
            [
                'key' => 'gmail_smtp_port',
                'value' => '587',
            ],
            [
                'key' => 'gmail_smtp_username',
                'value' => '',
            ],
            [
                'key' => 'gmail_smtp_password',
                'value' => '',
            ],
            [
                'key' => 'gmail_smtp_encryption',
                'value' => 'tls',
            ],
            [
                'key' => 'telegram_bot_token',
                'value' => '',
            ],
            [
                'key' => 'telegram_chat_id',
                'value' => '',
            ],
            [
                'key' => 'google_distance_matrix_api_key',
                'value' => '',
            ],
            [
                'key' => 'google_distance_matrix_enabled',
                'value' => '0',
            ],
        ];

        Config::insert($data);
    }
}
