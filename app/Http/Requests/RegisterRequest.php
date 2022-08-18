<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'fullname' => 'required|min:6|max:30',
            'email'=>'required',
            'password'=>'required',
            'confirm_password'=>'required',
            'address'=>'required',
            'phone'=>'required',
        ];
    }
    public function messages(){
        return [
            'fullname.required' => ':attribute không được để trống',
            'fullname.min' => ':attribute phải lớn hơn fullname.min ký tự',
            'fullname.max' => ':attribute phải nhỏ hơn fullname.max ký tự',
            'email.required' => ':attribute không được để trống',
            'password.required' => ':attribute không được để trống',
            'confirm_password.required' => ':attribute không được để trống',
            'address.required' => ':attribute không được để trống',
            'phone.required' => ':attribute không được để trống',
        ];
    }

    public function attributes(){
        return [
            'fullname' => 'Họ tên',
            'email' => 'Địa chỉ',
            'password' => 'Mật khẩu',
            'confirm_password' => 'Mật khẩu xác nhận',
            'address' => 'Địa chỉ',
            'phone' => 'Số điện thoại',
        ];
    }
}
