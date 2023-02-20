<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Lucturer\StoreLucturerRequest;
use App\Http\Requests\Backend\Lucturer\UpdateLucturerRequest;
use Illuminate\Http\Request;
use App\Models\Lucturer;

class LucturerController extends Controller
{

    public function index()
    {
        $lucturers = Lucturer::get();

        return view('admin.lucturers.index', compact('lucturers'));
    }


    public function create()
    {
        return view('admin.lucturers.create');
    }


    public function store(StoreLucturerRequest $request)
    {
        $image_in_db = NULL;
        if ($request->has('image')) {
            $path = public_path() . '/uploads/lucturers';
            $image = request('image');
            $image_name = time() . request('image')->getClientOriginalName();
            $image->move($path, $image_name);
            $image_in_db = '/uploads/lucturers/' . $image_name;
        }

        Lucturer::create([

            'name'           => $request->name,
            'email'          => $request->email,
            'phone'          => $request->phone,
            'description'    => $request->description,
            'personal_info'  => $request->personal_info,
            'address'        => $request->address,
            'website'        => $request->website,
            'twitter'        => $request->twitter,
            'behance'        => $request->behance,
            'linkedin'       => $request->linkedin,
            'vimeo'          => $request->vimeo,
            'instagram'      => $request->instagram,
            'job_title'      => $request->job_title,
            'facebook'       => $request->facebook,
            'tiktok'         => $request->tiktok,
            'youtube'        => $request->youtube,
            'image'          => $image_in_db,

        ]);



        return redirect()->route('admin.lucturers.index')->with('success', 'Lucturer Created successfully');
    }


    public function show($id)
    {
        $lucturer = Lucturer::find($id);

        return view('admin.lucturers.show', compact('lucturer'));
    }


    public function edit($id)
    {
        $lucturer = Lucturer::find($id);

        return view('admin.lucturers.edit', compact('lucturer'));
    }


    public function update(UpdateLucturerRequest $request, $id)
    {

        $lucturer = Lucturer::findOrFail($id);

        $image_in_db = NULL;
        if ($request->has('image')) {
            $path = public_path() . '/uploads/lucturers';
            $image = request('image');
            $image_name = time() . request('image')->getClientOriginalName();
            $image->move($path, $image_name);
            $image_in_db = '/uploads/lucturers/' . $image_name;
        } else {

            $image_in_db = $lucturer->image;
        }

        $lucturer->update([

            'name'           => $request->name,
            'email'          => $request->email,
            'phone'          => $request->phone,
            'description'    => $request->description,
            'personal_info'  => $request->personal_info,
            'address'        => $request->address,
            'website'        => $request->website,
            'twitter'        => $request->twitter,
            'behance'        => $request->behance,
            'linkedin'       => $request->linkedin,
            'vimeo'          => $request->vimeo,
            'instagram'      => $request->instagram,
            'job_title'      => $request->job_title,
            'facebook'       => $request->facebook,
            'tiktok'         => $request->tiktok,
            'youtube'        => $request->youtube,
            'image'          => $image_in_db,

        ]);

        return redirect()->route('admin.lucturers.index')->with('success', 'lucturer updated successfully');
    }


    public function delete($id)
    {
        $lucturer = Lucturer::find($id);

        if ($lucturer) {

            $lucturer->delete();
            return redirect()->route('admin.lucturers.index')->with('error', 'Lucturer Deleted Successfully');

            return redirect()->route('admin.lucturers.index')->with('error', 'lucturer Not Found!');
        }
    }
}
