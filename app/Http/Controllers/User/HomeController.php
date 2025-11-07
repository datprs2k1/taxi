<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Config;
use App\Models\Order;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $config = Config::all();
        $orders = Order::all();
        
        // Lấy tất cả bài viết thường (post)
        $allPosts = Post::where('type', 'post')
            ->orderBy('published_date', 'desc')
            ->get();
        
        // Lấy bài viết khuyến mãi (promotion)
        $promotionPosts = Post::where('type', 'promotion')
            ->orderBy('published_date', 'desc')
            ->get();
        
        return view('pages.user.home', compact([
            'config', 
            'orders', 
            'allPosts', 
            'promotionPosts'
        ]));
    }
}
