<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CompanySpeaker\StoreCompanySpeaker;
use App\Http\Requests\Backend\CompanySpeaker\UpdateCompanySpeaker;
use Illuminate\Http\Request;
use App\Models\Speaker;
use App\Models\CompanySpeaker;

class CompanySpeakerController extends Controller
{
    public function index()
    {
        $companies = CompanySpeaker::get();
        return view('admin.company_speakers.index', compact('companies'));
    }


    public function create()
    {
        return view('admin.company_speakers.create');
    }
    public function store(StoreCompanySpeaker $request)
    {
        $image_in_db = NULL;
        if ($request->has('image')) {
            $path = public_path() . '/uploads/company_speakers';
            $image = request('image');
            $image_name = time() . request('image')->getClientOriginalName();
            $image->move($path, $image_name);
            $image_in_db = '/uploads/company_speakers/' . $image_name;
        }

        CompanySpeaker::create([
            'name'          => $request->name,
            'link'          => $request->link,
            'image'         => $image_in_db,
        ]);
        return redirect()->route('admin.companyspeakers.index')->with('success', 'Company Speaker created successfully');
    }

    public function show($id)
    {
        $company = CompanySpeaker::findOrFail($id);
        return view('admin.company_speakers.show', compact('company'));
    }
    public function edit($id)
    {
        $company = CompanySpeaker::findOrFail($id);
        return view('admin.company_speakers.edit', compact('company'));
    }


    public function update(UpdateCompanySpeaker $request, $id)
    {

        $company = CompanySpeaker::findOrFail($id);

        $image_in_db = NULL;
        if ($request->has('image')) {
            $path = public_path() . '/uploads/comapny_speakers';
            $image = request('image');
            $image_name = time() . request('image')->getClientOriginalName();
            $image->move($path, $image_name);
            $image_in_db = '/uploads/comapny_speakers/' . $image_name;
        } else {

            $image_in_db = $company->image;
        }

        $company->update([
            'name'          => $request->name,
            'link'          => $request->link,
            'image'         => $image_in_db,
        ]);
        return redirect()->route('admin.companyspeakers.index')->with('success', 'Company Speaker updated successfully');
    }

    public function delete($id)
    {
        $company = CompanySpeaker::findOrFail($id);
        $company->delete();
        //delete all speakers of this company
        // $speakers = Speaker::where('company_id', $id)->get();
        // foreach ($speakers as $speaker) {
        //     $speaker->delete();
        // }
        return redirect()->route('admin.companyspeakers.index')->with('error', 'Company Speaker deleted successfully');
    }
}
