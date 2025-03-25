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
        ];

        Config::insert($data);
    }
}
