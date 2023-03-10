<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Sponsers\StoreSponserRequest;
use App\Http\Requests\Backend\Sponsers\UpdateSponserRequest;
use Illuminate\Http\Request;
use App\Models\Sponser;

class SponserController extends Controller
{

    public function index()
    {
        $sponsers = Sponser::get();
        return view('admin.sponsers.index', compact('sponsers'));
    }

    public function create()
    {
        return view('admin.sponsers.create');
    }


    public function store(StoreSponserRequest $request)
    {
        //image
        $image_in_db = NULL;
        if ($request->has('image')) {
            $path = public_path() . '/uploads/sponsers';
            $image = request('image');
            $image_name = time() . request('image')->getClientOriginalName();
            $image->move($path, $image_name);
            $image_in_db = '/uploads/sponsers/' . $image_name;
        }

        Sponser::create([

            'name'   => $request->name,
            'link'   => $request->link,
            'image'  => $image_in_db,
            'type'   => $request->type,
        ]);

        return redirect()->route('admin.sponsers.index')->with('success', 'Sponsers Create Successfully');
    }

    public function show($id)
    {
        $sponser = Sponser::find($id);
        return view('admin.sponsers.show', compact('sponser'));
    }

    public function edit($id)
    {
        $sponser = Sponser::find($id);

        return view('admin.sponsers.edit', compact('sponser'));
    }


    public function update(UpdateSponserRequest $request, $id)
    {
        $sponser = Sponser::find($id);
        $image_in_db = NULL;
        if ($request->has('image')) {

            $path = public_path() . '/uploads/sponser';
            $image = request('image');
            $image_name = time() . request('image')->getClientOriginalName();
            $image->move($path, $image_name);
            $image_in_db = '/uploads/sponser/' . $image_name;
        } else {

            $image_in_db = $sponser->image;
        }

        $sponser->update([

            'name'    => $request->name,
            'link'    => $request->link,
            'image'   => $image_in_db,
            'type'    => $request->type,
        ]);

        if ($sponser) {

            return redirect()->route('admin.sponsers.index')->with('success', 'Successfully Updated Sponser'); //
        }
    }


    public function delete($id)
    {
        $sponser = Sponser::find($id);

        if ($sponser) {
            $sponser->delete();

            return redirect()->route('admin.sponsers.index')->with('error', 'Successfully Deleted Sponser');
        }
    }
}
