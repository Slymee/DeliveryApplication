<?php

namespace App\Http\Requests;

use App\Rules\ValidAddressFormat;
use App\Rules\ValidFullNameFormat;
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
            'full_name' => ['required','bail', 'string', 'max:50', new ValidFullNameFormat()],
            'address' => ['required', 'bail', 'string', new ValidAddressFormat()],
            'email' => ['required', 'bail', 'email', 'unique:users'],
            'username' => ['required', 'bail', 'unique:users'],
            'password' => ['required', 'bail', 'min:8', 'confirmed'],
        ];
    }
}
