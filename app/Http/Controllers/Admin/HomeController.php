<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.admin.home');
    }

    public function login()
    {
        return view('pages.admin.login');
    }

    public function processLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $request->username)->first();
        if (!$user) {
            return redirect()->back()->with('error', 'Username không tồn tại');
        }

        if (!Hash::check($request->password, $user->password)) {
            return redirect()->back()->with('error', 'Mật khẩu không đúng');
        }

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->route('admin.home.index');
        }

        return redirect()->back()->with('error', 'Đăng nhập thất bại');
    }
}
