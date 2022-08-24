<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPassRequest extends FormRequest
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
            'pass' => 'required',
            'confirmPass' => 'required',
            'code' => 'required',
        ];
    }

    public function messages(){
            return [
                'pass.required' => ':attribute không được để trống',
                'confirmPass.required' => ':attribute không được để trống',
                'code.required' => ':attribute không được để trống',
            ];
    }

    public function attributes(){
        return [
            'pass' => 'Mật khẩu',
            'confirmPass' => 'Trường xác nhận mật khẩu',
            'code' => 'Mã xác nhận'
        ];
    }
}
