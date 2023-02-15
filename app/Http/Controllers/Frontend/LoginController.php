<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Auth\LoginRequest;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{

    protected function login()
    {
        return view('frontend.login');
    }

    protected function doLogin(LoginRequest $request)
    {
        $remember_me = request('remember_me') == 1 ? true : false;

        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $remember_me)) {

            return redirect()->route('home')->with('success', 'Login Successfully');
        } else {
            return redirect()->back()->with('error', 'Email or password is incorrect');
        }
    }

    public function google()
    {
        return Socialite::driver('google')->redirect()->stateless();
    }

    public function callbackHandel()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (Exception $e) {
            return redirect()->route('login');
        }

        $data = User::where('email', $user->email)->first();
        if ($data) {
            Auth::login($data);
            return redirect()->route('home')->with('success', 'Login Successfully BY Google');
        } else {
            return redirect()->back()->with('error', 'Email or password is incorrect');
        }
    }

    protected function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('home');
    }
}
