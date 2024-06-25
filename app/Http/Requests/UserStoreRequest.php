<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'nom' => "required|string|max:225",
            'prenoms' => "required|string|max:225",
            'pays_id' => "required|exists:pays,id|integer",
            'role_id' => "required|exists:roles,id|integer",
            'email' => "required|string|email|max:225",
            'numero_whatsapp' => "string|max:10",
            'password' => "required|confirmed|min:8|max:10",
        ];
    }
}
