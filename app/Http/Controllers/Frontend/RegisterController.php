<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Auth\Register;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
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
        $cvName = null;
        if($request->hasFile('cv'))
        {
            $cv = $request->file('cv');
            $cvName = time() . '.' . $cv->getClientOriginalExtension();
            $cv->move(public_path('uploads/users/cv'), $cvName);
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
            'cv'            => $cvName,
            'roles_name'    => null

        ]);

        if ($users) {

            return redirect()->route('login.show')->with('success', 'Register Successfully');
        } else {
            return redirect()->route('register')->with('error', 'Register Failed');
        }
    }
}
