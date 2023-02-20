<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Speaker;
use App\Models\Settings;
use App\Models\Slider;
use App\Models\Sponser;

class HomeController extends Controller
{


    public function index()
    {
        $sliders = Slider::get();
        $setting = Settings::first();
        $speakers = Speaker::get();
        $sponsers = Sponser::get();
        $sponser_one = Sponser::take(2)->get();
        $sponser_two = Sponser::skip(2)->take(3)->get();
        $sponser_three = Sponser::skip(5)->take(100)->get();
        //    dd($sponser_three);
        //    $sponser_four = Sponser::skip(11)->take(4)->get();

        return view('frontend.layouts.index', compact('sliders', 'setting', 'speakers', 'sponser_one', 'sponser_two', 'sponser_three' , 'sponsers'));
    }
}
