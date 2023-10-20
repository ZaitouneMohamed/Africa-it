<?php

namespace App\Http\Requests\Admin\products;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            "title" => "required|max:200|min:2|unique:products,title",
            "description" => "required|max:60049",
            "price" => "required",
            "images" => "required|max:2048",
            "old_price" => "required",
            "sub_categorie" => "required"
        ];
    }
}
