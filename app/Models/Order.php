<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'start_place',
        'end_place',
        'stop_points',
        'num_seats',
        'pickup_time',
        'round_trip',
        'long_trip',
        'vat',
        'waittime',
        'price',
        'distance',
        'code'
    ];

    public $casts = [
        'stop_points' => 'array',
    ];
}
