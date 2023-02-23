<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CompanySpeaker;
use App\Models\Gifit;
use App\Models\Speaker;
use App\Models\Settings;
use App\Models\Slider;
use App\Models\Sponser;
use App\Models\TopicSpeaker;

class HomeController extends Controller
{


    public function index()
    {
        $sliders = Slider::get();
        $setting = Settings::first();
        $gifit = Gifit::first();
        $speakers = Speaker::get();
        $main_sponsers = Sponser::where('type' , 'Main')->get();
        $others_sponsers = Sponser::where('type' , 'Others')->get();
        $topic_firstDay = TopicSpeaker::with('speaker')->where('days' , 'First Day')->orderBy('start_time' , 'asc')->get();
        // dd($topic_firstDay);
        $topic_secondDay = TopicSpeaker::with('speaker')->where('days' , 'Second Day')->orderBy('start_time' , 'asc')->get();
        $topic_thirdDay = TopicSpeaker::with('speaker')->where('days' , 'Third Day')->orderBy('start_time' , 'asc')->get();
        $company_speakers = CompanySpeaker::get();

        return view('frontend.layouts.index', compact('sliders', 'setting' , 'gifit' , 'speakers', 'main_sponsers', 'others_sponsers' , 'topic_firstDay' , 'topic_secondDay' , 'topic_thirdDay' , 'company_speakers'));
    }
}
