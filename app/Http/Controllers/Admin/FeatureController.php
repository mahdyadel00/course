<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feature;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::get();
        return view('admin.features.index', compact('features'));
    }


    public function create()
    {
        return view('admin.features.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        Feature::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect()->route('admin.features.index')->with('success', 'Feature created successfully');
    }

    public function show($id)
    {
        $feature = Feature::find($id);
        return view('admin.features.show', compact('feature'));
    }


    public function edit($id)
    {
        $feature = Feature::find($id);
        return view('admin.features.edit', compact('feature'));
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $feature = Feature::find($id);
        $feature->update([
            'title' => $request->title,
            'description' => $request->description,
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
