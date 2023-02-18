<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LinkedinController extends Controller
{
    //login with Linkedin
    public function providerLinkedin()
    {
        return Socialite::driver('linkedin')->redirect();
    }

    public function callbackHandelLinkedin()
    {
        $user = Socialite::driver('linkedin')->user();
        // dd($user->token);
        $data = User::where('linkedin_id', $user->id)->first();
        // dd($data);
        if ($data != null) {
            Auth::login($data);
            return redirect()->route('home')->with('success', 'Login Successfully BY Linkedin');
        } else {
            User::updateOrCreate([
                'linkedin_id' => $user->id,
            ], [
                'name'     => $user->name,
                'email'    => $user->email,
                'password' => $user->token,
                'image'    => $user->attributes['avatar'],
            ]);

            return redirect()->route('login.show')->with('success', 'Registration Successfully BY Linkedin');
        }
        return redirect()->back()->with('error', 'Name or password is incorrect');
    }
}
