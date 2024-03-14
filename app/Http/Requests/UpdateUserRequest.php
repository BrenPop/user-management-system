<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UpdateUserRequest extends FormRequest
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
        // get user id from route
        $user = $this->route('user');

        return [

            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($user->id)],
        ];
        // return [
        //     'name' => 'sometimes|string',
        //     'surname' => 'sometimes|string',
        //     'south_african_id' => 'sometimes|string|unique:users',
        //     'mobile_number' => 'sometimes|string|unique:users',
        //     'email' => 'sometimes|email|unique:users',
        //     'birth_date' => 'sometimes|date',
        //     'language_id' => 'sometimes|exists:languages,id',
        //     'password' => ['sometimes', 'confirmed', Password::defaults()],
        //     'interest_ids' => 'sometimes|array',
        //     'interest_ids.*' => 'sometimes:interests,id'
        // ];
    }
}
