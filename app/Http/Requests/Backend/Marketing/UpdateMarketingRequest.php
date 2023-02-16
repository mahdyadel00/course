<?php

namespace App\Http\Requests\Backend\Marketing;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMarketingRequest extends FormRequest
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
            'title'       => 'sometimes|string',
            'description' => 'sometimes|string',
        ];
    }
}
