<?php

namespace App\Http\Requests\Backend\Feature;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFeatureRequest extends FormRequest
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
            'title'           => ['sometimes', 'string', 'max:255'],
            'description'     => ['sometimes', 'string', 'max:255'],
            'title_1'         => ['sometimes', 'string', 'max:255'],
            'description_1'   => ['sometimes', 'string', 'max:255'],
            'title_2'         => ['sometimes', 'string', 'max:255'],
            'description_2'   => ['sometimes', 'string', 'max:255'],
        ];
    }
}
