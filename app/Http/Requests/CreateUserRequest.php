<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class CreateUserRequest extends FormRequest
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
            'name' => 'required|string',
            'surname' => 'required|string',
            'south_african_id' => 'required|string|unique:users',
            'mobile_number' => 'required|string|unique:users',
            'email' => 'required|email|unique:users',
            'birth_date' => 'required|date',
            'language_id' => 'required|exists:languages,id',
            'password' => ['required', 'confirmed', Password::defaults()],
            'interest_ids' => 'required|array',
            'interest_ids.*' => 'exists:interests,id'
        ];
    }
}
