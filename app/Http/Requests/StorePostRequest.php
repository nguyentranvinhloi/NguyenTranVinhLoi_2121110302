<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required|min:10'
        ];
    }
    public function messages(): array
    {
        return [
            'title.required'=>'Tiêu đề không để trống!',   
            'title.min'=>'Tiêu đề ít nhất 10 kí tự!',   
        ];
    }
}
