<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feature;
use App\Models\Pricing;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::get();
        return view('admin.features.index', compact('features'));
    }


    public function create()
    {
        $pricing = Pricing::get();
        return view('admin.features.create' , compact('pricing'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required',
            'description' => 'required',
            'price_id'    => 'required',
        ]);
        $pricing = Pricing::find($request->price_id);
        Feature::create([
            'title'       => $request->title,
            'description' => $request->description,
            'price_id'    => $pricing->id,
        ]);
        return redirect()->route('admin.features.index')->with('success', 'Feature created successfully');
    }

    public function show($id)
    {
        $feature = Feature::with('pricing')->find($id);
        return view('admin.features.show', compact('feature'));
    }


    public function edit($id)
    {
        $feature = Feature::find($id);
        $pricing = Pricing::get();
        return view('admin.features.edit', compact('feature' , 'pricing'));
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'title'       => 'required',
            'description' => 'required',
            'price_id'    => 'required',
        ]);
        $pricing = Pricing::find($request->price_id);
        $feature = Feature::find($id);
        $feature->update([
            'title'       => $request->title,
            'description' => $request->description,
            'price_id'    => $pricing->id,
        ]);
        return redirect()->route('admin.features.index')->with('success', 'Feature updated successfully');
    }

    public function delete($id)
    {
        $feature = Feature::find($id);
        $feature->delete();
        return redirect()->route('admin.features.index')->with('success', 'Feature deleted successfully');
    }
}
