<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => ['required', 'string', 'min:4', 'max:36'],
            'valor' => ['required', 'numeric'],
            'cod_barras' => ['required', 'string'],
            'icms' => ['required', 'string'],
            'ipi' => ['required', 'string'],
            'descricao' => ['nullable', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Nome é obrigatório',
            'nome.min' => 'Nome tem que possuir no mínimo 4 caracteres',
            'nome.max' => 'Nome tem que possuir no máximo 36 caracteres',
            'valor.required' => 'Valor é obrigatório',
            'cod_barras.required' => 'Código de barras é obrigatório',
            'icms.required' => 'ICMS é obrigatório',
            'ipi.required' => 'IPI é obrigatório',
        ];
    }
}
