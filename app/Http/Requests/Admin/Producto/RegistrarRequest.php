<?php

namespace App\Http\Requests\Admin\Producto;

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
            'slug'          => 'unique:producto',
            'nombre'        => 'required|min:2',
            'descripcion'   => 'required|min:2',
            'imagen1'       => 'mimes:jpg,jpeg,png',
            'imagen2'       => 'mimes:jpg,jpeg,png',
            'imagen3'       => 'mimes:jpg,jpeg,png',
            'imagen4'       => 'mimes:jpg,jpeg,png',
            'idcategoria'   => 'required',
            'idpromocion'   => 'required',
            'idmarca'       => 'required'
        ];
    }
}
