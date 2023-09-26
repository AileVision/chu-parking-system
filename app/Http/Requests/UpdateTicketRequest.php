<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTicketRequest extends FormRequest
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
            'entree_id' => 'required|exists:entrees,id',
            'sortie_id' => 'required|exists:sorties,id',
            'ticket_number' => 'required',
            'entree_datetime' => 'required|date',
            'sortie_datetime' => 'required|date',
            'total_amount' => 'required|numeric',
            'status' => 'required'
        ];
    }

    public function messages(){
        return [
            'entree_id.exists' => 'Cet entree n\' existe pas.',
            'entree_id.required' => 'L\'entree est obligatoire.',
            'sortie_id.exists' => 'Cette sortie n\' existe pas.',
            'sortie_id.required' => 'La sortie est obligatoire.',
            'ticket_number.required' => 'Le numéro de ticket est obligatoire.',
            'entree_datetime.required' => 'La date de sortie est obligatoire.',
            'sortie_datetime.required' => 'La date de sortie est obligatoire.',
            'total_amount.required' => 'Le montant est obligatoire.',
            'status.required' => 'Le statut est obligatoire.'
        ];
    }
}
