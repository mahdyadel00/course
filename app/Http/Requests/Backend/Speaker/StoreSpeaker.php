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
        // dd($this->all());
        return [

            "name"        => ["required", "string"],
            "description" => ["required", "string"],
            "job_title"   => ["required", "string"],
            "personal_info"   => ["required", "string"],
            "address"     => ["sometimes", "string"],
            "email"       => ["sometimes", "string"],
            "phone"       => ["sometimes", "string"],
            "website"     => ["sometimes", "string"],
            "twitter"     => ["sometimes", "string"],
            "behance"     => ["sometimes", "string"],
            "linkedin"    => ["sometimes", "string"],
            "vimeo"       => ["sometimes", "string"],
            "youtube"     => ["sometimes", "string"],
            "facebook"    => ["sometimes", "string"],
            "tiktok"      => ["sometimes", "string"],
            "instagram"   => ["sometimes", "string"],
            "image"       => ["sometimes", "image", "mimes:jpeg,png,jpg,gif,svg,webp"],

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
            "name.required"        => "Name is required",
            "description.required" => "Description is required",
            "address.required"     => "Address is required",
            "job_title.required"   => "Job Title is required",
            "personal_info.required"   => "Personal Info is required",
            "email.sometimes"       => "Email is required",
            "phone.sometimes"       => "Phone is required",
            "image.required"       => "Image is required",
            "website.sometimes"     => "Website is required",
            "twitter.sometimes"     => "Twitter is required",
            "behance.required"     => "Behance is required",
            "linkedin.sometimes"    => "Linkedin is required",
            "vimeo.sometimes"       => "Vimeo is required",
            "youtube.sometimes"     => "Youtube is required",
            "facebook.sometimes"    => "Facebook is required",
            "tiktok.sometimes"      => "Tiktok is required",
            "instagram.sometimes"   => "Instagram is required",
        ];
    }
}
