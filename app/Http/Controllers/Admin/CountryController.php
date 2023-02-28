<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Country\StoreCountryRequest;
use App\Http\Requests\Backend\Country\UpdateCountryRequest;
use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{

    public function index()
    {
        $countries = Country::get();
        return view('admin.countries.index', compact('countries'));
    }

    public function create()
    {
        return view('admin.countries.create');
    }


    public function store(StoreCountryRequest $request)
    {
        $flag_in_db = NULL;
        if ($request->has('flag')) {
            $path = public_path() . '/uploads/countries';
            $flag = request('flag');
            $flag_name = time() . request('flag')->getClientOriginalName();
            $flag->move($path, $flag_name);
            $flag_in_db = '/uploads/countries/' . $flag_name;
        }

        $country = Country::create([

            'name'        => $request->name,
            'code'        => $request->code,
            'flag'        => $flag_in_db,

        ]);

        if ($country) {

            return redirect()->route('admin.countries.index')->with('success', 'Successfully Created Country'); //
        }
    }


    public function show($id)
    {
        $country = Country::find($id);

        return view('admin.countries.show', compact('country'));
    }


    public function edit($id)
    {
        $country = Country::find($id);

        return view('admin.countries.edit', compact('country'));
    }


    public function update(UpdateCountryRequest $request, $id)
    {
        $country = Country::find($id);
        $flag_in_db = NULL;
        if ($request->has('flag')) {
            $path = public_path() . '/uploads/countries';
            $flag = request('flag');
            $flag_name = time() . request('flag')->getClientOriginalName();
            $flag->move($path, $flag_name);
            $flag_in_db = '/uploads/countries/' . $flag_name;
        } else {
            $flag_in_db = $country->flag;
        }

        $country->update([

            'name'        => $request->name,
            'flag'        => $request->flag,
            'flag'        => $flag_in_db,

        ]);

        if ($country) {

            return redirect()->route('admin.countries.index')->with('success', 'Successfully Updated Country'); //
        }
    }


    public function delete($id)
    {
        $country = Country::find($id);

        $country->delete();

        return redirect()->route('admin.countries.index')->with('error', 'Successfully Deleted Country'); //
    }
}
