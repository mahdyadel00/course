<?php

namespace App\Http\Requests\Frontend\Order;

use Illuminate\Foundation\Http\FormRequest;

class OrderPayment extends FormRequest
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
            "amount"         => ["required", "numeric"],
            "currency"       => ["required", "string"],
            "paymentOptions" => ["required", "string"],
            "user_id"        => ["required", "numeric"],
            "pricing_id"     => ["required", "numeric"],
            "status"         => ["required", "string"],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */

    public function messages()
    {
        return [
            "amount.required"         => "Amount is required",
            "amount.numeric"          => "Amount must be a number",
            "currency.required"       => "Currency is required",
            "currency.string"         => "Currency must be a string",
            "paymentOptions.required" => "Payment Options is required",
            "paymentOptions.string"   => "Payment Options must be a string",
            "user_id.required"        => "User ID is required",
            "user_id.numeric"         => "User ID must be a number",
            "pricing_id.required"     => "Pricing ID is required",
            "pricing_id.numeric"      => "Pricing ID must be a number",
            "status.required"         => "Status is required",
            "status.string"           => "Status must be a string",
        ];
    }
}
