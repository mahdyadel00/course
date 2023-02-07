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

            "name"        => ["required", "string"],
            "description" => ["required", "string"],
            "job_title"   => ["required", "string"],
            "personal_info"   => ["required", "string"],
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
            "image.required"       => "Image is required",
        ];
    }
}
