<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\_Abstract\ApiBaseRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends ApiBaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => [
                'required',
                'string',
                'max:255'
            ],
            'phone_no' => [
                'required',
                'string',
                Rule::unique('users')
            ],
            'password' => [
                'required',
                'string',
                'min:6',
                'confirmed'
            ]
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Tên',
            'phone_no' => 'Số điện thoại',
            'password' => 'Mật khẩu'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'string' => ':attribute phải là chuỗi',
            'max' => ':attribute không được vượt quá :max ký tự',
            'unique' => ':attribute đã tồn tại',
            'min' => ':attribute phải có ít nhất :min ký tự',
            'confirmed' => ':attribute không khớp'
        ];
    }
}
