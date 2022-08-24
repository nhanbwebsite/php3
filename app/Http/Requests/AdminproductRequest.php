<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminproductRequest extends FormRequest
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
            'product_name' => 'required|min:6',
            'product_price' => 'required',
            'product_size' => 'required',
            'product_img' => 'required',
        ];
    }

    public function messages(){
        return [
            'product_name.required' => ':attribute không được để trống',
            'product_price.required' => ':attribute không được để trống',
            'product_size.required' => ':attribute không được để trống',
            'product_img.required' => ':attribute không được để trống',
        ];
    }

    public function attributes(){
        return [
            'product_name' => 'Tên sản sẩm',
            'product_price' => 'Giá sản sẩm',
            'product_size' => 'Size sản sẩm',
            'product_img' => 'Hình sản sẩm',
        ];
    }
    public function prepareForValidation(){
        $this ->merge([
            //  tạo giá trị mặc định cho form
            'created_at' => Now()
        ]);
    }
}
