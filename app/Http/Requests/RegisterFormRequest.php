<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
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
            'full_name' => ['required','bail', 'string', 'max:50'],
            'address' => ['required', 'bail', 'string', 'max:50'],
            'email' => ['required', 'bail', 'email'],
            'username' => ['required', 'bail'],
            'password' => ['required', 'bail', 'min:8', 'confirmed'],
        ];
    }
}
