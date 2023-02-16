<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Servay\StoreServayRequest;
use App\Http\Requests\Backend\Servay\UpdateServayRequest;
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


    public function store(StoreServayRequest $request)
    {
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


    public function update(UpdateServayRequest $request, $id)
    {


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
