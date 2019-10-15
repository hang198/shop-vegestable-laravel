<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|max:30',
            'unit_price' => 'required',
            'promotion_price' => 'required',
            'image' => 'required',
            'unit' => 'required',
            'description' => 'required'
        ];
    }
    public function messages()
    {
        return [
          'name.required' => 'Tên sản phẩm không được để trống',
            'unit_price.required' => 'Giá gốc sản phẩm không được để trống',
            'promotion_price.required' => 'Giá khuyến mãi sản phẩm không được để trống',
            'image.required' => 'Ảnh không được để trống',
            'unit.required' => 'Trường này không được để trống',
            'description.required' => 'Trường này không được để trống'
        ];
    }
}
