<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Speaker\StoreSpeaker;
use App\Http\Requests\Backend\Speaker\UpdateSpeaker;
use App\Models\CompanySpeaker;
use Illuminate\Http\Request;
use App\Models\Speaker;

class SpeakersController extends Controller
{
    public function index()
    {
        $speakers = Speaker::with('company')->get();
        return view('admin.speakers.index', compact('speakers'));
    }


    public function create()
    {
        $companies = CompanySpeaker::get();
        return view('admin.speakers.create', compact('companies'));
    }
    public function store(StoreSpeaker $request)
    {
        $image_in_db = NULL;
        if ($request->has('image')) {
            $path = public_path() . '/uploads/speakers';
            $image = request('image');
            $image_name = time() . request('image')->getClientOriginalName();
            $image->move($path, $image_name);
            $image_in_db = '/uploads/speakers/' . $image_name;
        }

        Speaker::create([

            'name'           => $request->name,
            'email'          => $request->email,
            'company_id'     => $request->company_id,
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

        return redirect()->route('admin.speakers.index')->with('success', 'Speaker Created successfully');
    }

    public function show($id)
    {
        $speaker = Speaker::with('company')->where('id' , $id)->first();
        return view('admin.speakers.show', compact('speaker'));
    }
    public function edit($id)
    {
        $speaker = Speaker::with('company')->findOrFail($id);
        $companies = CompanySpeaker::get();
        return view('admin.speakers.edit', compact('speaker' , 'companies'));
    }


    public function update(UpdateSpeaker $request, $id)
    {
        $speaker = Speaker::findOrFail($id);

        $image_in_db = NULL;
        if ($request->has('image')) {
            $path = public_path() . '/uploads/speakers';
            $image = request('image');
            $image_name = time() . request('image')->getClientOriginalName();
            $image->move($path, $image_name);
            $image_in_db = '/uploads/speakers/' . $image_name;
        } else {

            $image_in_db = $speaker->image;
        }

        $speaker->update([

            'name'           => $request->name,
            'email'          => $request->email,
            'company_id'     => $request->company_id,
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

        return redirect()->route('admin.speakers.index')->with('success', 'Speaker updated successfully');
    }

    public function delete($id)
    {
        $speaker = Speaker::findOrFail($id);
        $speaker->delete();
        return redirect()->route('admin.speakers.index')->with('error', 'Speaker Deleted Successfully');
    }
}
