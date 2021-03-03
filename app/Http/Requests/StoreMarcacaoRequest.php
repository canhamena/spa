<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMarcacaoRequest extends FormRequest
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
             'nome' => 'required',
             'telefone' => 'required',
             'provincia_spa' => 'required',
             'localidade' => 'required',
             'servico' => 'required',
             'tiposervico' => 'required',
             'qtd_pessoa' => 'required|min:1',
             'data_atendimento' => 'required'
             
        ];
    }
}
