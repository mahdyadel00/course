<?php

namespace App\Http\Requests\Backend\Speaker;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSpeaker extends FormRequest
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

            "name"          => ["required", "string"],
            "email"         => ["required", "string", "email", "max:255", "unique:users"],
            "phone"         => ["nullable", "string", "max:255"],
            "job_title"     => ["nullable", "string", "max:255"],
            "personal_info" => ["nullable", "string"],
            "description"   => ["nullable", "string"],
            "address"       => ["nullable", "string"],
            "website"       => ["nullable", "string"],
            "facebook"      => ["nullable", "string"],
            "twitter"       => ["nullable", "string"],
            "linkedin"      => ["nullable", "string"],
            "instagram"     => ["nullable", "string"],
            "youtube"       => ["nullable", "string"],
            "behance"       => ["nullable", "string"],
            "tiktok"        => ["nullable", "string"],
            "vimeo"         => ["nullable", "string"],
            "image"         => ["nullable", "image", "mimes:jpeg,png,jpg,gif,svg,webp"],

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
            'name.required'          => __('admin.required', ['attribute' => __('attributes.name')]),
            'email.required'         => __('admin.required', ['attribute' => __('attributes.email')]),
            'phone.required'         => __('admin.required', ['attribute' => __('attributes.phone')]),
            'job_title.required'     => __('admin.required', ['attribute' => __('attributes.job_title')]),
            'personal_info.required' => __('admin.required', ['attribute' => __('attributes.personal_info')]),
            'description.required'   => __('admin.required', ['attribute' => __('attributes.description')]),
            'address.required'       => __('admin.required', ['attribute' => __('attributes.address')]),
            'website.required'       => __('admin.required', ['attribute' => __('attributes.website')]),
            'facebook.required'      => __('admin.required', ['attribute' => __('attributes.facebook')]),
            'twitter.required'       => __('admin.required', ['attribute' => __('attributes.twitter')]),
            'linkedin.required'      => __('admin.required', ['attribute' => __('attributes.linkedin')]),
            'instagram.required'     => __('admin.required', ['attribute' => __('attributes.instagram')]),
            'youtube.required'       => __('admin.required', ['attribute' => __('attributes.youtube')]),
            'behance.required'       => __('admin.required', ['attribute' => __('attributes.behance')]),
            'tiktok.required'        => __('admin.required', ['attribute' => __('attributes.tiktok')]),
            'vimeo.required'         => __('admin.required', ['attribute' => __('attributes.vimeo')]),
            'image.required'         => __('admin.required', ['attribute' => __('attributes.image')]),
            'image.image'            => __('admin.image', ['attribute' => __('attributes.image')]),
            'image.mimes'            => __('admin.mimes', ['attribute' => __('attributes.image')]),
        ];
    }
}
