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
            'tel_proprietaire' => 'required|numeric'
        ];
    }

    public function messages(){
        return [
            'immatriculation.required' => 'L\'immatriculation est obligatoire',
            'tel_proprietaire.required' => 'Le numéro de téléphone est obligatoire',
            'tel_proprietaire.numeric' => 'Le numéro de téléphone doit etre un nombre'
        ];
    }
}
