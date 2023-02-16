<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\City\StoreCityRequest;
use App\Http\Requests\Backend\City\UpdateCityRequest;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\City;

class CityController extends Controller
{

    public function index()
    {
        $cities = City::with('country')->get();
        return view('admin.cities.index', compact('cities'));
    }

    public function create()
    {
        $countries = Country::get();
        return view('admin.cities.create' , compact('countries'));
    }


    public function store(StoreCityRequest $request)
    {
        $city = City::create([

            'name'          => $request->name,
            'country_id'    => $request->country_id,

        ]);

        if ($city) {

            return redirect()->route('admin.cities.index')->with('success', 'Successfully Created City'); //
        }
    }


    public function show($id)
    {
        $city = City::find($id);

        return view('admin.cities.show', compact('city'));
    }


    public function edit($id)
    {
        $countries = Country::get();
        $city = City::find($id);
        return view('admin.cities.edit', compact('countries' , 'city'));
    }


    public function update(UpdateCityRequest $request, $id)
    {
        $city = City::find($id);

        $city->update([

            'name'           => $request->name,
            'country_id'     => $request->country_id,

        ]);

        if ($city) {

            return redirect()->route('admin.cities.index')->with('success', 'Successfully Updated City'); //
        }
    }


    public function delete($id)
    {
        $city = City::find($id);

        $city->delete();

        return redirect()->route('admin.cities.index')->with('error', 'Successfully Deleted City'); //
    }
}
