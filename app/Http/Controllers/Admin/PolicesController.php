<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Polices;


class PolicesController extends Controller
{

    public function index()
    {
        $polices = Polices::first();

        return view('admin.polices.index', compact('polices'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title'         => 'required|string',
            'description'   => 'required|string',
        ]);

        $polices = Polices::first();

        $polices->update([

            'title'         => $request->title,
            'description'   => $request->description
        ]);

        if ($polices) {

            return redirect()->back();
        }
    }
}
