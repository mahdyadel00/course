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
            'title'           => 'required',
            'description'     => 'required',
            'title_1'         => 'required',
            'description_1'   => 'required',
            'title_2'         => 'required',
            'description_2'   => 'required',
        ];
    }
}
