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

       return view('admin.fill_servy.index' , compact('servy'));

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
    }


    public function show($id)
    {

    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {

    }
}
