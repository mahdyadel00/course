<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Auth\Register;
use App\Http\Requests\Frontend\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Validator;


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

    protected function doRegister(RegisterRequest $request)
    {

        //upload cv
        $cv_in_db = NULL;
        if ($request->has('cv')) {
            $path = public_path() . '/uploads/users';
            $cv = request('cv');
            $cv_name = time() . request('cv')->getClientOriginalName();
            $cv->move($path, $cv_name);
            $cv_in_db = '/uploads/users/' . $cv_name;
        }

        $user = User::query()->create([

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

        if ($user) {
            // event(new Registered($user));
            return redirect()->route('login.show')->with('success', 'Register Successfully');
        } else {
            return redirect()->route('register')->with('error', 'Register Failed');
        }
    }
}
