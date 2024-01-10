<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;

class LanguageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Asegúrate de que solo los usuarios autorizados puedan enviar este formulario
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      return [
        'name' => 'required|string|max:255',
        'label' => 'required|string|max:255'
      ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
      return [
        'name.required' => 'El nombre es obligatorio',
        'name.string' => 'El nombre debe ser una cadena de texto',
        'name.max' => 'El nombre no puede contener más de 255 caracteres',
        'label.required' => 'El label es obligatorio',
        'label.string' => 'El label debe ser una cadena de texto',
        'label.max' => 'El label no puede contener más de 255 caracteres',
      ];
    }
}