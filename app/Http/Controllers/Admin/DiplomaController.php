<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Diploma\StoreDiploma;
use App\Http\Requests\Backend\Diploma\UpdateDiploma;
use Illuminate\Http\Request;
use App\Models\Diploma;

class DiplomaController
 extends Controller
{
    public function index()
    {
        $diplomas = Diploma::get();
        return view('admin.diplomas.index', compact('diplomas'));
    }


    public function create()
    {
        return view('admin.diplomas.create');
    }
    public function store(StoreDiploma $request)
    {

        Diploma::create([
            'title'       => $request->title,
            'price'       => $request->price,
            'description' => $request->description,
        ]);
        return redirect()->route('admin.diplomas.index')->with('success', 'Diploma created successfully');
    }

    public function show($id)
    {
        $diploma = Diploma::find($id);
        return view('admin.diplomas.show', compact('diploma'));
    }


    public function edit($id)
    {
        $diploma = Diploma::find($id);
        return view('admin.diplomas.edit', compact('diploma'));
    }


    public function update(UpdateDiploma $request, $id)
    {
        $diploma = Diploma::find($id);
        $diploma->update([
            'title'       => $request->title,
            'price'       => $request->price,
            'description' => $request->description,
        ]);
        return redirect()->route('admin.diplomas.index')->with('success', 'Diploma updated successfully');
    }

    public function delete($id)
    {
        $diploma = Diploma::find($id);
        $diploma->delete();
        return redirect()->route('admin.diplomas.index')->with('error', 'Diploma deleted successfully');
    }
}
