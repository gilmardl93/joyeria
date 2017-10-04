<?php

namespace App\Http\Requests\Admin\Contactos;

use Illuminate\Foundation\Http\FormRequest;

class RegistrarRequest extends FormRequest
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
            'direccion'     => 'required|min:2',
            'telefono1'     => 'required|numeric',
            'email1'        => 'required|email'
        ];
    }
}
