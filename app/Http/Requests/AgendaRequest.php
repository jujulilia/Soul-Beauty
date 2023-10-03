<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgendaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id' => 'required|max:120|min:5',
            'profissional_id' => 'required|max:11|min:10',
            'cliente_id' => 'required|email|max:120|unique:clientes,email',
            'servico_id' => 'required|max:11|min:11|unique:clientes,cpf',
            'data_hora' => 'required',
            'tipo_pagamento' => 'required|min:3|max:20',
            'valor' => 'required|max:2|min:2',
            
        ];
    }
}
        