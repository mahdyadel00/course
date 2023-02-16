<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Policies\UpdatePoliciesRequest;
use Illuminate\Http\Request;
use App\Models\Polices;


class PolicesController extends Controller
{

    public function index()
    {
        $polices = Polices::first();

        return view('admin.polices.index', compact('polices'));
    }

    public function update(UpdatePoliciesRequest $request)
    {


        $polices = Polices::first();

        $polices->update([
            'title'         => $request->title,
            'description'   => $request->description
        ]);

        if ($polices) {

            return redirect()->back()->with('success', 'Polices updated successfully');
        }
    }
}
