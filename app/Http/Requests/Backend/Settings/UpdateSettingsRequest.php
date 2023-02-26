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

            'title' => ["nullable", "string"],
            'description' => ["nullable", "string"],
            'address' => ["nullable", "string"],
            'phone' => ["nullable", "string"],
            'email' => ["nullable", "string"],
            'start_from' => ["nullable"],
            'end_at' => ["nullable"],
            'facebook_link' => ["nullable", "string"],
            'twitter_link' => ["nullable", "string"],
            'youtbe_link' => ["nullable", "string"],
            'dribble_link' => ["nullable", "string"],
            'vimeo_link' => ["nullable", "string"],
            'behance_link' => ["nullable", "string"],
            'instagram_link' => ["nullable", "string"],
            'logo' => ["nullable", "image", "mimes:jpeg,png,jpg,gif,svg,webp"],
            'image' => ["nullable", "image", "mimes:jpeg,png,jpg,gif,svg,webp"],
            'main_image' => ["nullable", "image", "mimes:jpeg,png,jpg,gif,svg,webp"],
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
            'title.nullable' => __('validation.nullable', ['attribute' => __('attributes.title')]),
            'description.nullable' => __('validation.nullable', ['attribute' => __('attributes.description')]),
            'address.nullable' => __('validation.nullable', ['attribute' => __('attributes.address')]),
            'phone.nullable' => __('validation.nullable', ['attribute' => __('attributes.phone')]),
            'email.nullable' => __('validation.nullable', ['attribute' => __('attributes.email')]),
            'start_from.nullable' => __('validation.nullable', ['attribute' => __('attributes.start_from')]),
            'end_at.nullable' => __('validation.nullable', ['attribute' => __('attributes.end_at')]),
            'facebook_link.nullable' => __('validation.nullable', ['attribute' => __('attributes.facebook_link')]),
            'twitter_link.nullable' => __('validation.nullable', ['attribute' => __('attributes.twitter_link')]),
            'dribble_link.nullable' => __('validation.nullable', ['attribute' => __('attributes.dribble_link')]),
            'behance_link.nullable' => __('validation.nullable', ['attribute' => __('attributes.behance_link')]),
            'vimeo_link.nullable' => __('validation.nullable', ['attribute' => __('attributes.vimeo_link')]),
            'instagram_link.nullable' => __('validation.nullable', ['attribute' => __('attributes.instagram_link')]),
            'logo.nullable' => __('validation.nullable', ['attribute' => __('attributes.logo')]),
            'image.nullable' => __('validation.nullable', ['attribute' => __('attributes.image')]),
            'main_image.nullable' => __('validation.required', ['attribute' => __('attributes.main_image')]),
            'logo.image' => __('validation.image', ['attribute' => __('attributes.logo')]),
            'image.image' => __('validation.image', ['attribute' => __('attributes.image')]),
            'main_image.image' => __('validation.image', ['attribute' => __('attributes.main_image')]),
            'logo.mimes' => __('validation.mimes', ['attribute' => __('attributes.logo')]),
            'image.mimes' => __('validation.mimes', ['attribute' => __('attributes.image')]),
            'main_image.mimes' => __('validation.mimes', ['attribute' => __('attributes.main_image')]),
        ];
    }
}
