<?php

namespace App\Http\Requests\Admin\livreur;

use Illuminate\Foundation\Http\FormRequest;

class CreateLivreurRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name" => "required|unique:livreurs,full_name|max:200",
            "phone" => "required|max:200",
            "adresse" => "required|max:1000",
            "email" => "required|email|unique:livreurs,email|max:200",
        ];
    }
}
