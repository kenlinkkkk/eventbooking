<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_name' => 'required',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'user_name.required' => 'Vui lòng điền thông tin tên tài khoản',
            'password.required' => 'Vui lòng nhập mật khẩu',
        ];
    }
}

