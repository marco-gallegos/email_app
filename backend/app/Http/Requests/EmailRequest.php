<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

//FIXME: el request no funciono en esta version de laravel al ponerla en la funcion tronaba
class EmailRequest extends FormRequest
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
            "nombre" => "required",
            "telefono" => "required",
            "email" => "required|email",
            "asunto"=> "required",
        ];
    }
}
