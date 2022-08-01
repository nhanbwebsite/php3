<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminCategoryRequest extends FormRequest
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
            'category_name' => 'required|min:6'
        ];
    }

    public function messages(){
        return [
            'category_name.required' => ':attribute không được bỏ trống',
            'category_name.min' => ':attribute tối thiểu 6 ký tự'

        ];
    }

    public function attributes(){
        return [
            'category_name' => 'Tên danh mục',
        ];
    }

    public function prepareForValidation(){
        $this ->merge([
            //  tạo giá trị mặc định cho form
            'date' => date("d/m/Y")
        ]);
    }
}
