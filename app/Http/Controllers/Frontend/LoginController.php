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

    public function provider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackHandel()
    {
        $user = Socialite::driver('google')->user();
            dd($user->user);
        $data = User::where('email', $user->email)->first();
        if ($data) {
            Auth::login($data);
            return redirect()->route('home')->with('success', 'Login Successfully BY Google');
        } else {
            User::updateOrCreate([
                'google_id' => $user->id,
            ], [
                'name'     => $user->name,
                'email'    => $user->email,
                'password' => $user->token,
                'image'    => $user->picture,
            ]);

            return redirect()->route('login.show')->with('success', 'Registration Successfully BY Google');
        }
        return redirect()->back()->with('error', 'Email or password is incorrect');
    }

    protected function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('home');
    }
}
