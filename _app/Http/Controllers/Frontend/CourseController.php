<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    protected function index()
    {
        $course = Course::first();
        return view('frontend.courses.index', compact('course'));
    }

    //dwonload
    public function download($id)
    {
        $course = Course::where('id', $id)->first();
        $file_path = public_path($course->course_file);
        return response()->download($file_path);
    }

}
