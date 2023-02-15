<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Marketing;

class MarketingController extends Controller
{

    public function index()
    {
        $marketings = Marketing::get();

        return view('admin.marketings.index', compact('marketings'));
    }

    public function create()
    {
        return view('admin.marketings.create');
    }


    public function store(Request $request)
    {
        $request->validate([

            'title'        => 'required',
            'description'  => 'required',
        ]);

        Marketing::create([

            'title'         => $request->title,
            'description'   => $request->description,
        ]);

        return redirect()->route('admin.marketings.index')->with('success', 'Marketings Create Successfully');
    }


    public function show($id)
    {
        $marketing = Marketing::find($id);
        return view('admin.marketings.show', compact('marketing'));
    }


    public function edit($id)
    {
        $marketing = Marketing::find($id);

        return view('admin.marketings.edit', compact('marketing'));
    }


    public function update(Request $request, $id)
    {

        $request->validate([

            'title'         => 'required|string',
            'description'   => 'required',
        ]);

        $marketing = Marketing::find($id);

        $marketing->update([

            'title'        => $request->title,
            'description'  => $request->description,

        ]);

        if ($marketing) {

            return redirect()->route('admin.marketings.index')->with('success', 'Successfully Updated Marketing'); //
        }
    }


    public function delete($id)
    {
        $marketing = Marketing::find($id);

        if ($marketing) {
            $marketing->delete();

            return redirect()->route('admin.marketings.index')->with('error', 'Successfully Deleted Marketing');
        }
    }
}
