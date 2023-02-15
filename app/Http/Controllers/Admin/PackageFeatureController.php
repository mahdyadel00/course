<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\PackageFeature\StorePackageFeature;
use App\Http\Requests\Backend\PackageFeature\UpdatePackageFeature;
use Illuminate\Http\Request;
use App\Models\PackageFeature;
use App\Models\Pricing;

class PackageFeatureController extends Controller
{
    public function index()
    {
        $packages_features = PackageFeature::get();
        return view('admin.packages_features.index', compact('packages_features'));
    }


    public function create()
    {
        $pricing = Pricing::get();
        return view('admin.packages_features.create' , compact('pricing'));
    }
    public function store(StorePackageFeature $request)
    {
        $pricing = Pricing::find($request->price_id);
        PackageFeature::create([
            'title'       => $request->title,
            'description' => $request->description,
            'price_id'    => $pricing->id,
        ]);
        return redirect()->route('admin.packages_features.index')->with('success', 'Feature created successfully');
    }

    public function show($id)
    {
        $package_feature = PackageFeature::with('pricing')->find($id);
        return view('admin.packages_features.show', compact('package_feature'));
    }


    public function edit($id)
    {
        $package_feature = PackageFeature::find($id);
        $pricing = Pricing::get();
        return view('admin.packages_features.edit', compact('package_feature' , 'pricing'));
    }


    public function update(UpdatePackageFeature $request, $id)
    {
        $pricing = Pricing::find($request->price_id);
        $package_feature = PackageFeature::find($id);
        $package_feature->update([
            'title'       => $request->title,
            'description' => $request->description,
            'price_id'    => $pricing->id,
        ]);
        return redirect()->route('admin.packages_features.index')->with('success', 'Package Feature updated successfully');
    }

    public function delete($id)
    {
        $package_feature = PackageFeature::find($id);
        $package_feature->delete();
        return redirect()->route('admin.packages_features.index')->with('error', 'Package Feature deleted successfully');
    }
}
