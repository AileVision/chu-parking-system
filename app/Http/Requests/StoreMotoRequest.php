<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMotoRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'immatriculation' => 'required',
            'tel_proprietaire' => 'required'
        ];
    }

    public function messages(){
        return [
            'immatriculation.required' => 'Le champ immatriculation est obligatoire',
            'tel_proprietaire.required' => 'Le champ teléphone est obligatoire'
        ];
    }
}
