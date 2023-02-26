<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginGoogleController extends Controller
{

    public function provider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackHandel()
    {
        $user = Socialite::driver('google')->user();

        $data = User::where('email', $user->email)->first();

        if ($data != null) {
            Auth::login($data);
            return redirect()->route('home')->with('success', 'Login Successfully BY Google');
        } else {
            User::updateOrCreate([
                'google_id' => $user->id,
            ], [
                'name'     => $user->name,
                'email'    => $user->email,
                // 'password' => $user->token,
                'image'    => $user->user['picture'],
            ]);

            return redirect()->route('login.show')->with('success', 'Registration Successfully BY Google');
        }
        return redirect()->back()->with('error', 'Email or password is incorrect');
    }
}
