<?php

namespace App\Http\Requests\Backend\Speaker;

use Illuminate\Foundation\Http\FormRequest;

class StoreSpeaker extends FormRequest
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
            "name"          => ["required", "string" , "max:255"],
            "email"         => ["required", "string", "email", "max:255", "unique:users,email"],
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
            "name.required" => "Name is required",
            "image.sometimes" => "Image is required",
        ];
    }
}
