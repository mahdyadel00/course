<?php

namespace App\Http\Requests\Backend\Courses;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourseRequest extends FormRequest
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
            'title'             => 'required',
            'description'       => 'required',
            'title_1'           => 'required',
            'description_1'     => 'required',
            'title_2'           => 'required',
            'description_2'     => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'image_1' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'course_file' => 'sometimes|mimes:pdf,doc,docx,zip',
        ];
    }
}
