<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmailSubscription;
use App\Models\FillServy;

class ServayController extends Controller
{

    public function index()
    {
        $servy = FillServy::get();

        return view('admin.fill_servy.index', compact('servy'));
    }


    public function create()
    {
        return view('admin.fill_servy.create');
    }


    public function store(Request $request)
    {
        $request->validate([

            'faq' => 'required',
        ]);

        FillServy::create([

            'faq'  => $request->faq,
            'answer'  => 0,
        ]);

        return redirect()->route('admin.servay.index')->with('Successfully', 'FillServy Create Successfully');
    }


    public function show($id)
    {
    }


    public function edit($id)
    {
        $servay = FillServy::find($id);

        return view('admin.fill_servy.edit', compact('servay'));
    }


    public function update(Request $request, $id)
    {

        $request->validate([

            'faq'  => 'required|string',
        ]);

        $servay = FillServy::find($id);

        $servay->update([

            'faq'       => $request->faq,
            'answer'    => 0,
        ]);

        if ($servay) {

            return redirect()->route('admin.servay.index');
        }
    }


    public function delete($id)
    {
        $servay = FillServy::find($id);

        if ($servay) {
            $servay->delete();

            return redirect()->route('admin.servay.index');
        }
    }
}
