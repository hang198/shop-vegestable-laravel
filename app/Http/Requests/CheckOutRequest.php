<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckOutRequest extends FormRequest
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
            'name' => 'required|max:30|min:2',
            'address' => 'required',
            'phone' => 'required|min:10|max:11',
            'email' => 'required|email'
        ];
    }
    public function messages()
    {
        return [
          'name.required' => 'Tên không được để trống',
          'name.max' => 'Tên có tối đa 30 kí tự',
          'name.min'=> 'Tên phải có 2 kí tự trở lên',
            'address.required' => 'Địa chỉ không được để trống',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.max' => 'Số điện thoại có tối đa 11 số',
            'phone.min' => 'Số điện thoại phải có 10 số trở lên',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email chưa đúng định dạng'
        ];
    }
}
