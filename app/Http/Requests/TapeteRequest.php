<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TapeteRequest extends FormRequest
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
            'estampa' => 'required|string|max:9',
            'limpo' => 'boolean',
            'novo' => 'boolean',
            'voador' => 'boolean',
            'magico' => 'boolean',
            'tamanho' => 'required|string|max:13',
            'quantidade' => 'required|integer',
            'observacao' => 'string|nullable',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'estampa.required' => 'A estampa é obrigatória.',
            'estampa.max' => 'A estampa deve ter no máximo 9 caracteres.',
            'limpo.required' => 'O campo limpo é obrigatório.',
            'novo.required' => 'O campo novo é obrigatório.',
            'voador.required' => 'O campo voador é obrigatório.',
            'magico.required' => 'O campo mágico é obrigatório.',
            'tamanho.required' => 'O tamanho é obrigatório.',
            'tamanho.max' => 'O tamanho deve ter no máximo 13 caracteres.',
            'quantidade.required' => 'A quantidade é obrigatória.',
            'quantidade.integer' => 'A quantidade deve ser um número inteiro.',
            'observacao.required' => 'A observação é obrigatória.',
            'boolean' => 'O campo :attribute deve ser verdadeiro ou falso.',
        ];
    }
}
