<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSortieRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'moto_id'=> 'required|exists:motos,id',
            'ticket_number' => 'required|exists:tickets,id',
            'sortie_datetime' => 'required|date',
            'total_amount' => 'required|numeric'
        ];
    }

    public function messages(){
        return [
            'user_id.exists' => 'Cet utilisateur n\' existe pas.',
            'user_id.required' => 'L\'utilisateur est obligatoire.',
            'moto_id.exists' => 'Cette moto n\' existe pas.',
            'moto_id.required' => 'La moto est obligatoire.',
            'ticket_number.exists' => 'Ce ticket n\' existe pas.',
            'sortie_datetime.required' => 'La date de sortie est obligatoire.',
            'total_amount.required' => 'Le montant est obligatoire.',
            'total_amount.numeric' => 'Le montant doit etre un nombre.'
        ];
    }
}
