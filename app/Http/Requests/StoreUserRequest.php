<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|min:4'
        ];
    }
    public function messages(): array
    {
        return [
            'name.required'=>'Tên tài khoản không để trống!',   
            'name.min'=>'Tên tài khoản ít nhất 4 kí tự!',   
        ];
    }
}
