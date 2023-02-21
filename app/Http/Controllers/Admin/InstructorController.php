<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Instructor\StoreInstructorRequest;
use App\Http\Requests\Backend\Instructor\UpdateInstructorRequest;
use Illuminate\Http\Request;
use App\Models\Instructor;

class InstructorController extends Controller
{

    public function index()
    {
        $instructors = Instructor::get();

        return view('admin.instructors.index', compact('instructors'));
    }


    public function create()
    {
        return view('admin.instructors.create');
    }


    public function store(StoreInstructorRequest $request)
    {
        $image_in_db = NULL;
        if ($request->has('image')) {
            $path = public_path() . '/uploads/instructors';
            $image = request('image');
            $image_name = time() . request('image')->getClientOriginalName();
            $image->move($path, $image_name);
            $image_in_db = '/uploads/instructors/' . $image_name;
        }

        Instructor::create([

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



        return redirect()->route('admin.instructors.index')->with('success', 'Instructor Created successfully');
    }


    public function show($id)
    {
        $Instructor = Instructor::find($id);

        return view('admin.instructors.show', compact('Instructor'));
    }


    public function edit($id)
    {
        $Instructor = Instructor::find($id);

        return view('admin.instructors.edit', compact('Instructor'));
    }


    public function update(UpdateInstructorRequest $request, $id)
    {

        $Instructor = Instructor::findOrFail($id);

        $image_in_db = NULL;
        if ($request->has('image')) {
            $path = public_path() . '/uploads/instructors';
            $image = request('image');
            $image_name = time() . request('image')->getClientOriginalName();
            $image->move($path, $image_name);
            $image_in_db = '/uploads/instructors/' . $image_name;
        } else {

            $image_in_db = $Instructor->image;
        }

        $Instructor->update([

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

        return redirect()->route('admin.instructors.index')->with('success', 'Instructor updated successfully');
    }


    public function delete($id)
    {
        $Instructor = Instructor::find($id);

        if ($Instructor) {

            $Instructor->delete();
            return redirect()->route('admin.instructors.index')->with('error', 'Instructor Deleted Successfully');

            return redirect()->route('admin.instructors.index')->with('error', 'Instructor Not Found!');
        }
    }
}
