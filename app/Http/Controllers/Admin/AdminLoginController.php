<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{

    protected function login()
    {
        return view('admin.login');
    } // end of index

    protected function doLogin(Request $request)
    {

        $remember_me = request('remember_me') == 1 ? true : false;

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->to(route('admin.home'));
        } else {
            return redirect(route('admin.login'))
                ->withInput($request->only('email', 'remember'))
                ->withErrors([('Data Error !')]);
        }
    }


    protected function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    } //End of Logout

}//end of controller
