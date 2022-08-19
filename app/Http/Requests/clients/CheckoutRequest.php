<?php

namespace App\Http\Requests\clients;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'userOrder' => 'required',
            'userEmailOrder' => 'required|email:rfc,dns',
            'userPhoneOrder' => 'required',
            'userOrderAddressDetail' => 'required',
        ];
    }

    public function messages(){
        return [
            'userOrder.required' => ':attribute không được để trống',
            'userEmailOrder.required' => ':attribute không được để trống',
            'userEmailOrder.email' => 'Trường này phải là định dạng email',
            'userPhoneOrder.required' => ':attribute không được để trống',
            'userOrderAddressDetail.required' => ':attribute không được để trống'
        ];
    }

    public function attributes(){
       return [
        'userOrder' => 'Tên khách hàng',
        'userEmailOrder' => 'Email',
        'userPhoneOrder' => 'Số điện thoại',
        'userOrderAddressDetail' => 'Địa chỉ chi tiết',
       ];
    }
}
