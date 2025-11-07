<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function image(Request $request)
    {
        $request->validate([
            'file' => 'required|image|max:5120', // max 5MB
        ]);

        $path = $request->file('file')->store('posts', 'public');

        return response()->json([
            'location' => asset('storage/' . $path),
        ]);
    }
}


