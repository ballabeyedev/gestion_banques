<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'identifiant'=>'required',
            'password'=>'required',
        ];
    }
    public function message()
    {
        return[
            'identifiant.required'=>'Le identifiant est requis',
            'password.required'=>'Le password est requis'
        ];

    }
}
