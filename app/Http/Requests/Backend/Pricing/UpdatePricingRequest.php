<?php

namespace App\Http\Requests\Backend\Pricing;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePricingRequest extends FormRequest
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
            'title'         => 'sometimes|string',
            'price'         => 'sometimes|string',
            'description'   => 'sometimes|string',
        ];
    }
}
