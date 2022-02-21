<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddStudentRequest extends FormRequest
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
            'name' => 'bail|required|alpha',
            'gender' => 'bail|required|alpha',
            'age' => 'bail|required|integer',
            'address' => 'bail|required|min:8'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'name.alpha' => 'Tên phải là chữ cái',
            'gender.required' => 'Giới tính không được để trống',
            'gender.alpha' => 'Giới tính phải là chữ cái',
            'age.required' => 'Tuổi không được để trống',
            'age.integer' => 'Tuổi phải là số nguyên',
            'address.required' => 'Địa chỉ không được để trống',
            'address.min' => 'Độ dài địa chỉ ngắn nhất là 8 ký tự'
        ];
    }
}
