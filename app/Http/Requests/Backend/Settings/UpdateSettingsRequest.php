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
            'email'            => ["sometimes", "string"],
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

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */

    public function messages(){
        return [
            'title_en.required'       => __('admin.required', ['attribute' => __('attributes.title_en')]),
            'title_ar.required'       => __('admin.required', ['attribute' => __('attributes.title_ar')]),
            'description.required'    => __('admin.required', ['attribute' => __('attributes.description')]),
            'address.required'        => __('admin.required', ['attribute' => __('attributes.address')]),
            'phone.required'          => __('admin.required', ['attribute' => __('attributes.phone')]),
            'email.required'          => __('admin.required', ['attribute' => __('attributes.email')]),
            'start_from.required'     => __('admin.required', ['attribute' => __('attributes.start_from')]),
            'end_at.required'         => __('admin.required', ['attribute' => __('attributes.end_at')]),
            'facebook_link.required'  => __('admin.required', ['attribute' => __('attributes.facebook_link')]),
            'twitter_link.required'   => __('admin.required', ['attribute' => __('attributes.twitter_link')]),
            'youtube_link.required'   => __('admin.required', ['attribute' => __('attributes.youtube_link')]),
            'linkedin_link.required'  => __('admin.required', ['attribute' => __('attributes.linkedin_link')]),
            'logo.required'           => __('admin.required', ['attribute' => __('attributes.logo')]),
            'image.required'          => __('admin.required', ['attribute' => __('attributes.image')]),
            'main_image.required'     => __('admin.required', ['attribute' => __('attributes.main_image')]),
            'logo.image'              => __('admin.image', ['attribute' => __('attributes.logo')]),
            'image.image'             => __('admin.image', ['attribute' => __('attributes.image')]),
            'main_image.image'        => __('admin.image', ['attribute' => __('attributes.main_image')]),
            'logo.mimes'              => __('admin.mimes', ['attribute' => __('attributes.logo')]),
            'image.mimes'             => __('admin.mimes', ['attribute' => __('attributes.image')]),
            'main_image.mimes'        => __('admin.mimes', ['attribute' => __('attributes.main_image')]),
        ];
    }
}
