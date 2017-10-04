<?php

namespace App\Http\Requests\Admin\Noticia;

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
            'slug'          => 'unique:noticia',
            'titulo'        => 'required|min:2',
            'descripcion'   => 'required|min:2',
            'imagen'        => 'mimes:jpg,jpeg,png'
        ];
    }
}
