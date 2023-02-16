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

            'title_en'         => ["sometimes", "string"],
            'title_ar'         => ["sometimes", "string"],
            'description'      => ["sometimes", "string"],
            'address'          => ["sometimes", "string"],
            'phone'            => ["sometimes", "string"],
            'email'            => ["sometimes"],
            'start_from'       => ["sometimes"],
            'end_at'           => ["sometimes"],
            'facebook_link'    => ["sometimes", "string"],
            'twitter_link'     => ["sometimes", "string"],
            'youtube_link'     => ["sometimes", "string"],
            'linkedin_link'    => ["sometimes", "string"],
            'logo'             => ["sometimes", "image", "mimes:jpeg,png,jpg,gif,svg,webp"],
            'image'            => ["sometimes", "image", "mimes:jpeg,png,jpg,gif,svg,webp"],
            'main_image'       => ["sometimes", "image", "mimes:jpeg,png,jpg,gif,svg,webp"],
        ];
    }
}
