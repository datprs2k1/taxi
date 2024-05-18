<?php

namespace App\Services\AuthService;

use App\Repositories\User\IUserRepository;
use App\Services\_Abstract\BaseService;
use App\Services\_Exception\AppServiceException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthService extends BaseService
{
    public function __construct(IUserRepository $userRepository)
    {
        $this->mainRepository = $userRepository;
    }

    public function login($request)
    {
        return DbTransactions()->addCallbackJson(function () use ($request) {

            $credentials = $request->fillData();
            if (!$token = auth()->attempt($credentials)) {
                throw new AppServiceException("Tài khoản không tồn tại.");
            }

            $user = Auth::user();

            return [
                'user' => $user,
                'token' => $token
            ];
        });
    }

    public function register($request)
    {
        return DbTransactions()->addCallbackJson(function () use ($request) {

            $data = $request->fillData();

            $data['password'] = Hash::make($data['password']);

            $this->mainRepository->create($data);

            return "Đăng ký thành công";
        });
    }

}
