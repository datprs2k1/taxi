<?php

namespace App\Http\Requests\Config;

use App\Http\Requests\_Abstract\ApiBaseRequest;

class ConfigUpdateRequest extends ApiBaseRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'nullable|string|max:255',
            'name' => 'nullable|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'zalo' => 'nullable|string|max:255',
            'messenger' => 'nullable|string|max:255',
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => 'Tiêu đề',
            'name' => 'Tên',
            'logo' => 'Logo',
            'description' => 'Mô tả',
            'address' => 'Địa chỉ',
            'phone' => 'Số điện thoại',
            'email' => 'Email',
            'facebook' => 'Facebook',
            'zalo' => 'Zalo',
            'messenger' => 'Messenger',
        ];
    }

    public function messages(): array
    {
        return [
            'nullable' => 'Trường :attribute không được để trống',
            'string' => 'Trường :attribute phải là chuỗi',
            'max' => 'Trường :attribute không được quá :max ký tự',
            'url' => 'Trường :attribute phải là URL',
            'image' => 'Trường :attribute phải là ảnh',
            'mimes' => 'Trường :attribute phải là ảnh',
        ];
    }
}
