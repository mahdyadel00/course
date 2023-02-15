<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Feature\UpdateFeatureRequest;
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


    public function update(UpdateFeatureRequest $request)
    {
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
