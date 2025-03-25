<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Pnlinh\GoogleDistance\Facades\GoogleDistance;

class OrderController extends Controller
{
    public function index()
    {
        try {
            $distance = google_distance('Xóm 10, Hải Anh, Hải Hậu, Nam Định', 'Sân bay Nội Bài');
            return $distance;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
