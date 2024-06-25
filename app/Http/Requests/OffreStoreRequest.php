<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OffreStoreRequest extends FormRequest
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
            "intitule" => "required|string",
            "description" => "required|string",
            "date_fin" => "required|date",
            "ville" => "required|string",
            "pays_id" => "required|exists:pays,id",
            "type_contrat" => "required|string",
            "salaire" => "nullable|string",
            "entreprise" => "nullable|string",
        ];
    }
}
