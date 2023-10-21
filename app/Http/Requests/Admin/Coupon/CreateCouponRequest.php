<?php

namespace App\Http\Requests\Admin\Coupon;

use Illuminate\Foundation\Http\FormRequest;

class CreateCouponRequest extends FormRequest
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
            'code' => "required|unique:coupons,code|max:200",
            'title' => "required|unique:coupons,title|max:200",
            'start_date' => "required|date",
            'end_date' => "required|date",
            'min_purchase' => "required|numeric",
            'discount' => "required|numeric",
        ];
    }
}
