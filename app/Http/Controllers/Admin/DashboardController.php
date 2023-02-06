<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Speaker;
use App\Models\User;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin')->except('logout');
    }
    protected function index()
    {
        $users = User::all();
        $speakers = Speaker::all();
        $contacts = Contact::all();
        return view('admin.dashboard' , compact('users', 'speakers' , 'contacts'));

    }// end of index


}//end of controller
