<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Polices;

class PolicesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected function index()
    {
        $polices = Polices::first();
        return view('frontend.polices.index', compact('polices'));
    }
}
