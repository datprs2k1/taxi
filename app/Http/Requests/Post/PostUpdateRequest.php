<?php

namespace App\Http\Requests\Post;

use App\Http\Requests\_Abstract\BaseRequest;

class PostUpdateRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'excerpt' => 'nullable|string|max:500',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type' => 'required|in:post,promotion',
            'featured' => 'nullable|boolean',
            'published_date' => 'nullable|date',
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => 'Tiêu đề',
            'content' => 'Nội dung',
            'excerpt' => 'Mô tả ngắn',
            'image' => 'Hình ảnh',
            'type' => 'Loại bài viết',
            'featured' => 'Nổi bật',
            'published_date' => 'Ngày xuất bản',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Trường :attribute không được để trống',
            'string' => 'Trường :attribute phải là chuỗi',
            'max' => 'Trường :attribute không được quá :max ký tự',
            'image' => 'Trường :attribute phải là ảnh',
            'mimes' => 'Trường :attribute phải là định dạng: jpeg, png, jpg, gif, svg',
            'in' => 'Trường :attribute không hợp lệ',
            'boolean' => 'Trường :attribute phải là true hoặc false',
            'date' => 'Trường :attribute phải là ngày hợp lệ',
        ];
    }
}
