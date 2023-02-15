<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pricing;
use App\Models\PackageFeature;

class PricingController extends Controller
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
        $pricing = Pricing::with('feature')->get();

        return view('frontend.pricing.index', compact('pricing'));
    }
    protected function pricingDetails($id)
    {
        $pricing = Pricing::where('id', $id)->first();
        $features = packageFeature::get();
        return view('frontend.pricing.single', compact('pricing', 'features'));
    }
}
