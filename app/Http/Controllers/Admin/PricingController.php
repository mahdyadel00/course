<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;
use App\Models\Pricing;

class PricingController extends Controller
{

    public function index()
    {
        $pricing = Pricing::get();
        return view('admin.pricing.index', compact('pricing'));
    }


    public function create()
    {
        return view('admin.pricing.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'required',
            'price'         => 'required',
            'description'   => 'required',
        ]);
        Pricing::create([
            'title'         => $request->title,
            'price'         => $request->price,
            'description'   => $request->description,
        ]);
        return redirect()->route('admin.pricing.index')->with('success', 'Pricing created successfully');
    }

    public function show($id)
    {
        $pricing = Pricing::find($id);
        return view('admin.pricing.show', compact('pricing'));
    }


    public function edit($id)
    {
        $pricing = Pricing::find($id);
        return view('admin.pricing.edit', compact('pricing'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title'         => 'required',
            'price'         => 'required',
            'description'   => 'required',
        ]);
        $pricing = Pricing::find($id);
        $pricing->update([
            'title'         => $request->title,
            'price'         => $request->price,
            'description'   => $request->description,
        ]);
        return redirect()->route('admin.pricing.index')->with('success', 'Pricing updated successfully');
    }

    public function delete($id)
    {
        $pricing = Pricing::find($id);
        $pricing->delete();
        return redirect()->route('admin.pricing.index')->with('success', 'Pricing deleted successfully');
    }
}
