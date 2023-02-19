<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class InstgramController extends Controller
{
    //login with Instgram //login with Facebook

    public function providerInstgram()
    {
        return Socialite::driver('instgram')->redirect();
    }
    public function callbackHandelInstgram()
    {
        dd('ok');
        $user = Socialite::driver('instgram')->user();
        $data = User::where('instgram_id', $user->id)->first();
        if ($data != null) {
            Auth::login($data);
            return redirect()->route('home')->with('success', 'Login Successfully BY instgram');
        } else {
            User::updateOrCreate([
                'instgram_id' => $user->id,
            ], [
                'name'     => $user->name,
                'password' => $user->token,
                'image'    => $user->attributes['avatar'],
            ]);

            return redirect()->route('login.show')->with('success', 'Registration Successfully BY instgram');
        }
        return redirect()->back()->with('error', 'Name or password is incorrect');
    }
}
