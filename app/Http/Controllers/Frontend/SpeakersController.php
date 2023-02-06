<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Speaker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class SpeakersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected function index(Request $request)
    {

        $speakers = Speaker::get();

        return view('frontend.speakers.index', compact('speakers'));
    }

    public function details($id){

        $speaker = Speaker::findOrFail($id);

        return view('frontend.speakers.details', compact('speaker'));
    }
}
