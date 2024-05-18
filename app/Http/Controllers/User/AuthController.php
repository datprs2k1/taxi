<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Services\AuthService\AuthService;

class AuthController extends Controller
{
    protected $service;
    public function __construct(AuthService $service){
        $this->service = $service;
    }

    public function login($request)
    {
        return $this->service->login($request);
    }

    public function register($request)
    {
        return $this->service->register($request);
    }
}
