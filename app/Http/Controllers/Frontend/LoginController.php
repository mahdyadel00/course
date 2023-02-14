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
        return Socialite::driver('google')->redirect();
    }

    public function callbackHandel()
    {
        $user =  Socialite::driver('google')->user();

        $data = User::where('email', $user->email)->first();
        if(!$data){
            dd($data);

            // $users['anme'] = $user->name;
            $users['email'] = $user->email;
            $data = User::create($users);
        }
        Auth::login($data);
        return redirect()->route('home');
    }

    protected function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('home');
    }
}
