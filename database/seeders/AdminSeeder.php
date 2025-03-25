<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        return DbTransactions()->addCallBack(function () {
            User::factory()->create([
                'username' => 'admin',
                'phone_no' => '081234567890',
                'password' => Hash::make('123456'),
            ]);
        });
    }
}
