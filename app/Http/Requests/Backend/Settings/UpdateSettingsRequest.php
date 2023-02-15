<?php

namespace App\Http\Requests\Backend\Settings;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingsRequest extends FormRequest
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
            'title_en'         => 'sometimes',
            'title_ar'         => 'sometimes',
            'description'   => 'sometimes',
            'address'       => 'sometimes',
            'phone'         => 'sometimes',
            'email'         => 'sometimes',
            'start_from'    => 'sometimes',
            'end_at'        => 'sometimes',
            'facebook_link'      => 'sometimes',
            'twitter_link'       => 'sometimes',
            'youtube_link'       => 'sometimes',
            'linkedin_link'      => 'sometimes',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
        ];
    }
}
