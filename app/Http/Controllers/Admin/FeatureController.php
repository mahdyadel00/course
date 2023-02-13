<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feature;
use Illuminate\Support\Facades\Cache;

class FeatureController extends Controller
{

    public function index()
    {
        $feature = Feature::first();
        return view('admin.features.index', compact('feature'));
    }


    public function update(Request $request)
    {
        $request->validate([
            'title'           => 'required',
            'description'     => 'required',
            'title_1'         => 'required',
            'description_1'   => 'required',
            'title_2'         => 'required',
            'description_2'   => 'required',
        ]);

        $feature = Feature::first();
        $feature->update([
            'title'           => $request->title,
            'description'     => $request->description,
            'title_1'         => $request->title_1,
            'description_1'   => $request->description_1,
            'title_2'         => $request->title_2,
            'description_2'   => $request->description_2,
        ]);

        if ($feature) {
            Cache::forget('feature');
            return redirect()->back()->with('success', 'Feature Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Feature Not Updated');
        }
    }
}
