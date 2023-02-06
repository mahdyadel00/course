<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\FavouriteProduct;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Settings;

class HomeController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function index()
    {
        // $slider = Slider::first();
        // $slider_right = Slider::skip(1)->first();
        // $slider_left = Slider::skip(2)->first();
        // $slider_top = Slider::skip(3)->first();
        // $banners = Banner::get();
        $setting = Settings::first();
        // $product_promoted = Product::with(['category' , 'user'])->where('nigotiable' , 1)->get();
        // $products = Product::with(['category' , 'user'])->where('nigotiable' , '!=' , 1)->limit(6)->get();

        return view('frontend.layouts.index', compact('setting'));
    }
}
