<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Speaker;
use App\Models\Settings;

class HomeController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function index()
    {

        $setting = Settings::first();
       $speakers = Speaker::get();

        return view('frontend.layouts.index', compact('setting' , 'speakers'));
    }
}
