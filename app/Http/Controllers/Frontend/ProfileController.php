<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Profile\UpdateProfileRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\Marketing;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserMarketing;
use Illuminate\Support\Facades\Hash;

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

            $marketings = Marketing::get();
            $user_marketings = UserMarketing::where('user_id', Auth::user()->id)->pluck('marketing_id')->toArray();
            $countries = Country::get();
            $cities = City::get();
            $user = User::with('marketing')->where('id', auth()->user()->id)->first();

            return view('frontend.accounts.profile', compact('user', 'marketings', 'countries', 'cities', 'user_marketings'));
        } else {

            return redirect()->route('login.show')->with('Un Authanticated!');
        }
    }
    protected function update(UpdateProfileRequest $request)
    {
        // dd($request->all());
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
        //identy
        $identy_in_db = NULL;
        if ($request->has('identy')) {
            $request->validate([
                'identy' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            ]);

            $path = public_path() . '/uploads/users';
            $identy = request('identy');
            $identy_name = time() . request('identy')->getClientOriginalName();
            $identy->move($path, $identy_name);
            $identy_in_db = '/uploads/users/' . $identy_name;
        } else {

            $identy_in_db = $user->identy;
        }
        //cv
        $cv_in_db = NULL;
        if ($request->has('cv')) {
            $request->validate([
                'cv' => 'required|mimes:pdf,doc,docx,zip',
            ]);

            $path = public_path() . '/uploads/users';
            $cv = request('cv');
            $cv_name = time() . request('cv')->getClientOriginalName();
            $cv->move($path, $cv_name);
            $cv_in_db = '/uploads/users/' . $cv_name;
        } else {

            $cv_in_db = $user->cv;
        }
        $user->update([

            'first_name'          => $request->first_name,
            'last_name'           => $request->last_name,
            'email'               => $request->email,
            'phone'               => $request->phone,
            'password'            => Hash::make($request->password),
            'address'             => $request->address,
            'birthdate'           => $request->birthdate,
            'education'           => $request->education,
            'qulification'        => $request->qulification,
            'english'             => $request->english,
            'country_id'          => $request->country_id,
            'city_id'             => $request->city_id,
            'image'               => $image_in_db,
            'identy'              => $identy_in_db,
            'cv'                  => $cv_in_db,
        ]);

        if ($user) {
            $user->marketing()->sync($request->marketing_id);

            return redirect()->back()->with('success', 'Profile Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function download($id)
    {
        $user = User::where('id', $id)->first();

        $file_path = public_path($user->cv);
        return response()->download($file_path);
    }
}
