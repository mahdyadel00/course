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

            "name"            => ["sometimes", "string"],
            "description"     => ["sometimes", "string"],
            "job_title"       => ["sometimes", "string"],
            "personal_info"   => ["sometimes", "string"],
            "image"           => ["sometimes", "image", "mimes:jpeg,png,jpg,gif,svg,webp"],

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
            "name.sometimes"             => "Name is required",
            "description.sometimes"      => "Description is required",
            "address.sometimes"          => "Address is required",
            "job_title.sometimes"        => "Job Title is required",
            "personal_info.sometimes"    => "Personal Info is required",
            "image.sometimes"            => "Image is required",
        ];
    }
}
