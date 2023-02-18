<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class InstgramController extends Controller
{
    //login with Instgram
    public function instgram()
    {
        return Socialite::driver('instgram')->redirect();
    }
    public function callbackHandelInstgram()
    {
        dd('her');
        $user = Socialite::driver('instgram')->user();
        dd($user);
        $data = User::where('email', $user->email)->first();
        if ($data) {
            Auth::login($data);
            return redirect()->route('home')->with('success', 'Login Successfully BY Instgram');
        } else {
            User::updateOrCreate([
                'instgram_id' => $user->id,
            ], [
                'name'     => $user->name,
                'password' => $user->token,
                'image'    => $user->attributes['avatar_original'],
            ]);

            return redirect()->route('login.show')->with('success', 'Registration Successfully BY Facebook');
        }
        return redirect()->back()->with('error', 'Email or password is incorrect');
    }
}
