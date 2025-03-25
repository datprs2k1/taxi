<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Config;
use App\Models\Order;

class HomeController extends Controller
{
    public function index()
    {
        $config = Config::all();
        $orders = Order::all();
        return view('pages.user.home', compact(['config', 'orders']));
    }
}
