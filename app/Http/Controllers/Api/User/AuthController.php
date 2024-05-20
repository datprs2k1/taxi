<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Services\Auth\AuthService;

class AuthController extends Controller
{
    protected $service;
    public function __construct(AuthService $service){
        $this->service = $service;
    }

    public function login(LoginRequest $request)
    {
        return $this->service->login($request);
    }

    public function register(RegisterRequest $request)
    {
        return $this->service->register($request);
    }
}
