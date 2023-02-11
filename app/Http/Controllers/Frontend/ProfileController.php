<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    protected function index(Request $request)
    {
        if (Auth::check()) {

            $user = User::first();

            return view('frontend.accounts.profile', compact('user'));
        } else {

            return redirect()->route('login.show')->with('Un Authanticated!');
        }
    }
    protected function update(Request $request)
    {

        // dd($request->all());
        // $request->validate([

        //     'first_name' => 'somtimes',
        //     'last_name'  => 'somtimes',
        //     'email'      => 'somtimes',
        //     'phone'      => 'somtimes',
        //     'address'    => 'somtimes',
        //     'birthdate'  => 'somtimes',

        // ]);
        $user = User::where('id', auth()->user()->id)->first();
        $image_in_db = NULL;
        if ($request->has('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            ]);

            $path = public_path() . '/uploads/users';
            $image = request('image');
            $image_name = time() . request('image')->getClientOriginalName();
            $image->move($path, $image_name);
            $image_in_db = '/uploads/users/' . $image_name;
        } else {

            $image_in_db = $user->image;
        }
        $user->update([

            'first_name'  => $request->first_name,
            'last_name'   => $request->last_name,
            'email'       => $request->email,
            'phone'       => $request->phone,
            'address'     => $request->address,
            'birthdate'   => $request->birthdate,
            'image'       => $image_in_db,
        ]);

        return redirect()->back()->with('success', 'Updated Profile Sucessfully');
    }
}
