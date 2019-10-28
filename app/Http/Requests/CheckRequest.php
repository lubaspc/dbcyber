<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckRequest extends FormRequest
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
            'brand' => 'required',
            'type' => 'required',
            'work' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
          'work.required' => 'Es nesesario el tu folio para poder continuar',
          'brand.required' => 'Es nesesario poder continuar',
          'type.required' => 'Es nesesario poder continuar',
          'work.integer' => 'Inserta un numero para continuar'
        ];
    }
}
