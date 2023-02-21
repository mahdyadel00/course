<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Speaker;

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
        $speakers = Speaker::take(4)->get();
        
        return view('frontend.courses.index', compact('course' , 'speakers'));
    }

    //dwonload
    public function download($id)
    {
        $course = Course::where('id', $id)->first();
        $file_path = public_path($course->course_file);
        return response()->download($file_path);
    }

}
