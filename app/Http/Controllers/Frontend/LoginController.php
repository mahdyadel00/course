<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

use function GuzzleHttp\Promise\all;

class LoginController extends Controller
{

    protected function login()
    {
        return view('frontend.login');
    }

    protected function doLogin(Request $request)
    {
        $request->validate([

            'email' => 'required',
            'password' => 'required',
        ]);
        $remember_me = request('remember_me') == 1 ? true : false;

        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $remember_me)) {

            return redirect()->route('home')->with('success', 'Login Successfully');
        } else {
            return redirect()->back()->with('error', 'Email or password is incorrect');
        }
    }

    public function provider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleCallback()
    {
        dd('ok');
        $user =  Socialite::driver('facebook')->user();
        dd($user);
        $finduser = User::where('facebook_id', $user->id)->first();
        if ($finduser) {
            Auth::login($finduser);
            return redirect()->route('home')->with('success', 'Login Successfully');
        } else {
            return redirect()->route('login.show')->with('error', 'Email or password is incorrect');
        }
    }

    protected function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('home');
    }
}
