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

            return view('frontend.profiles.index');
        } else {

            return redirect()->route('login.show')->with('Un Authanticated!');
        }
    }
    protected function update(Request $request , $id){

        // dd($request->all());
        $user = User::where('id' , $id)->first();

        $image_in_db = NULL;
        if ($request->has('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            ]);

            $path = public_path() . '/uploads/user';
            $image = request('image');
            $image_name = time() . request('image')->getClientOriginalName();
            $image->move($path, $image_name);
            $image_in_db = '/uploads/user/' . $image_name;
        }
        $user->where('id' , $id)->update([

            'first_name'  => $request->first_name,
            'last_name'  => $request->last_name,
            'email'  => $request->email,
            'phone'  => $request->phone,
            // 'country_id'  => $request->country_id,
            'image'  => $image_in_db,
        ]);

        return redirect()->back()->with('success' , 'Updated Profile Sucessfully');
    }

}