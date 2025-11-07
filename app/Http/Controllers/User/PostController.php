<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Config;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $config = Config::all();
        $allPosts = Post::where('type', 'post')
            ->orderBy('published_date', 'desc')
            ->get();

        $promotionPosts = Post::where('type', 'promotion')
            ->orderBy('published_date', 'desc')
            ->get();

        return view('pages.user.posts', compact('config', 'allPosts', 'promotionPosts'));
    }

    public function show($slug)
    {
        $config = Config::all();
        $post = Post::where('slug', $slug)
            ->orWhere('id', $slug)
            ->firstOrFail();

        // Get related posts (same type, exclude current post)
        $relatedPosts = Post::where('type', $post->type)
            ->where('id', '!=', $post->id)
            ->orderBy('published_date', 'desc')
            ->take(5)
            ->get();

        return view('pages.user.post-detail', compact('config', 'post', 'relatedPosts'));
    }
}


