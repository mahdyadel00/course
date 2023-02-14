<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Auth\Register;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Validator;
use Stevebauman\Location\Facades\Location;



use function GuzzleHttp\Promise\all;

class RegisterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    protected function register()
    {
        return view('frontend.register');
    }

    protected function doRegister(Request $request)
    {
        //upload cv
        $cv_in_db = NULL;
        if ($request->has('cv')) {
            $request->validate([
                "cv" => "required|mimes:pdf|max:10000"
            ]);

            $path = public_path() . '/uploads/users';
            $cv = request('cv');
            $cv_name = time() . request('cv')->getClientOriginalName();
            $cv->move($path, $cv_name);
            $cv_in_db = '/uploads/users/' . $cv_name;
        }



        $users = User::query()->create([

            'name'          => $request->name,
            'guard'         => "web",
            'birthdate'     => $request->birthdate,
            'email'         => $request->email,
            'password'      => Hash::make($request->password),
            'address'       => $request->address,
            'fill_survy'    => $request->fill_survy ? 1 : 0,
            'policies'      => $request->policies ? 1 : 0,
            'cv'            => $cv_in_db,
            'roles_name'    => null

        ]);

        if ($users) {

            return redirect()->route('login.show')->with('success', 'Register Successfully');
        } else {
            return redirect()->route('register')->with('error', 'Register Failed');
        }
    }

    public function provider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackHandel()
    {
        $user =  Socialite::driver('google')->user();
        dd($user);

        $data = User::create([
            'name'       => $user->name,
            'email'      => $user->email,
        ]);
        
        if ($data) {
            // Auth::login($data);
            return redirect()->route('home')->with('success', 'Login Successfully BY Google');
        } else {
            return redirect()->back()->with('error', 'Email or password is incorrect');
        }
    }
}
