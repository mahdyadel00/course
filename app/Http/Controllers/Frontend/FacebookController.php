<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    //login with Facebook

    public function providerFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function callbackHandelFacebook()
    {
        $user = Socialite::driver('facebook')->user();
        dd  ($user);
        $data = User::where('facebook_id', $user->id)->first();
        if ($data != null) {
            Auth::login($data);
            return redirect()->route('home')->with('success', 'Login Successfully BY Facebook');
        } else {
            User::updateOrCreate([
                'facebook_id' => $user->id,
            ], [
                'name'     => $user->name,
                'password' => $user->token,
                'image'    => $user->attributes['avatar_original'],
            ]);

            return redirect()->route('login.show')->with('success', 'Registration Successfully BY Facebook');
        }
        return redirect()->back()->with('error', 'Name or password is incorrect');
    }
}
