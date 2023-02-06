<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

use function GuzzleHttp\Promise\all;

class ContactController extends Controller
{

    protected function index()
    {
        return view('frontend.contacts.form');
    }

    protected function store(Request $request)
    {

        Contact::query()->create([

            'name'      =>     $request->name,
            'email'          =>     $request->email,
            'number'          =>     $request->number,
            'subject'        =>     $request->subject,
            'message'      =>     $request->message,
        ]);

        return redirect()->back()->withSuccess('Successfully created');
    }

    protected function aboutUs()
    {

        return view('frontend.about_us');
    }
}
