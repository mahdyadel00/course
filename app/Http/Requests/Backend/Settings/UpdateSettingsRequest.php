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

            'title'            => ["sometimes", "string"],
            'description'      => ["sometimes", "string"],
            'address'          => ["sometimes", "string"],
            'phone'            => ["sometimes", "string"],
            'email'            => ["sometimes", "string"],
            'start_from'       => ["sometimes"],
            'end_at'           => ["sometimes"],
            'facebook_link'    => ["sometimes", "string"],
            'twitter_link'     => ["sometimes", "string"],
            'dribble_link'     => ["sometimes", "string"],
            'vimeo_link'       => ["sometimes", "string"],
            'behance_link'     => ["sometimes", "string"],
            'instagram_link'   => ["sometimes", "string"],
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
            'title.required'          => __('validation.required', ['attribute' => __('attributes.title')]),
            'description.required'    => __('validation.required', ['attribute' => __('attributes.description')]),
            'address.required'        => __('validation.required', ['attribute' => __('attributes.address')]),
            'phone.required'          => __('validation.required', ['attribute' => __('attributes.phone')]),
            'email.required'          => __('validation.required', ['attribute' => __('attributes.email')]),
            'start_from.required'     => __('validation.required', ['attribute' => __('attributes.start_from')]),
            'end_at.required'         => __('validation.required', ['attribute' => __('attributes.end_at')]),
            'facebook_link.required'  => __('validation.required', ['attribute' => __('attributes.facebook_link')]),
            'twitter_link.required'   => __('validation.required', ['attribute' => __('attributes.twitter_link')]),
            'dribble_link.required'   => __('validation.required', ['attribute' => __('attributes.dribble_link')]),
            'behance_link.required'   => __('validation.required', ['attribute' => __('attributes.behance_link')]),
            'vimeo_link.required'   => __('validation.required', ['attribute' => __('attributes.vimeo_link')]),
            'instagram_link.required'  => __('validation.required', ['attribute' => __('attributes.instagram_link')]),
            'logo.required'           => __('validation.required', ['attribute' => __('attributes.logo')]),
            'image.required'          => __('validation.required', ['attribute' => __('attributes.image')]),
            'main_image.required'     => __('validation.required', ['attribute' => __('attributes.main_image')]),
            'logo.image'              => __('validation.image', ['attribute' => __('attributes.logo')]),
            'image.image'             => __('validation.image', ['attribute' => __('attributes.image')]),
            'main_image.image'        => __('validation.image', ['attribute' => __('attributes.main_image')]),
            'logo.mimes'              => __('validation.mimes', ['attribute' => __('attributes.logo')]),
            'image.mimes'             => __('validation.mimes', ['attribute' => __('attributes.image')]),
            'main_image.mimes'        => __('validation.mimes', ['attribute' => __('attributes.main_image')]),
        ];
    }
}
