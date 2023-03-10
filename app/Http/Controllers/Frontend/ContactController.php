<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\Frontend\Contact\ContactRequest;
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

    protected function store(ContactRequest $request)
    {

        Contact::query()->create([
            'name'      =>     $request->name,
            'email'     =>     $request->email,
            'number'    =>     $request->number,
            'subject'   =>     $request->subject,
            'message'   =>     $request->message,
        ]);

        return redirect()->back()->with('success', 'Your message has been sent successfully');
    }

    protected function aboutUs()
    {

        return view('frontend.about_us');
    }
}
