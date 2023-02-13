<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{

    public function index()
    {
        $course = Course::first();
        return view('admin.course.index', compact('course'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title'             => 'required',
            'description'       => 'required',
            'title_1'           => 'required',
            'description_1'     => 'required',
            'title_2'           => 'required',
            'description_2'     => 'required',
        ]);
        $course = Course::first();
        //image upload
        $image_in_db = $course->image;
        if ($request->has('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            ]);
            $path = public_path() . '/uploads/courses';
            $image = request('image');
            $image_name = time() . request('image')->getClientOriginalName();
            $image->move($path, $image_name);
            $image_in_db = '/uploads/courses/' . $image_name;
        }else{
            $image_in_db = $course->image;
        }

        //image1 upload
        $image_in_db_1 = $course->image_1;
        if ($request->has('image_1')) {
            $request->validate([
                'image_1' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            ]);
            $path = public_path() . '/uploads/courses';
            $image_1 = request('image_1');
            $image_name_1 = time() . request('image_1')->getClientOriginalName();
            $image_1->move($path, $image_name_1);
            $image_in_db_1 = '/uploads/courses/' . $image_name_1;
        }else{
            $image_in_db_1 = $course->image_1;
        }
        //course_file upload
        $course_file_in_db = $course->course_file;
        if ($request->has('course_file')) {
            $request->validate([
                'course_file' => 'required|mimes:pdf,doc,docx,zip',
            ]);
            $path = public_path() . '/uploads/courses';
            $course_file = request('course_file');
            $course_file_name = time() . request('course_file')->getClientOriginalName();
            $course_file->move($path, $course_file_name);
            $course_file_in_db = '/uploads/courses/' . $course_file_name;
        }else{
            $course_file_in_db = $course->course_file;
        }

        $course->update([
            'title'             => $request->title,
            'description'       => $request->description,
            'title_1'           => $request->title_1,
            'description_1'     => $request->description_1,
            'title_2'           => $request->title_2,
            'description_2'     => $request->description_2,
            'image'             => $image_in_db,
            'image_1'           => $image_in_db_1,
            'course_file'       => $course_file_in_db,
        ]);
        return redirect()->route('admin.courses.index')->with('success', 'Course updated successfully');
    }
    public function download()
    {
        $course = Course::first();

        $file_path = public_path($course->course_file);
        return response()->download($file_path);
    }
}
