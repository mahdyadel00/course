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
        $user =  Socialite::driver('google')->user();

        // $data = User::where('email', $user->email)->first();
        // if ($data) {
        //     Auth::login($data);
        //     return redirect()->route('home')->with('success', 'Login Successfully BY Google');
        // }else{
        //     return redirect()->back()->with('error', 'Email or password is incorrect');
        // }
        dd('here');
        try {

            $user = Socialite::driver('google')->user();

            $finduser = User::where('google_id', $user->id)->first();

            if($finduser){

                Auth::login($finduser);

                return redirect()->intended('dashboard');

            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    // 'password' => encrypt('123456dummy')
                ]);

                Auth::login($newUser);

                return redirect()->intended('dashboard');
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }

    }

    protected function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('home');
    }
}
