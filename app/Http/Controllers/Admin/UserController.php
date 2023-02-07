<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Country;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\User\UpdateUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Stevebauman\Location\Facades\Location;

class UserController extends Controller
{

    public function __construct()
    {
        //		$this->middleware('guest')->except('logout');
        $this->middleware('auth:admin')->except('logout');
    }
    protected function index()
    {

        $users = User::get();
        return view('admin.users.index', compact('users'));
    } // end of index

    public function create()
    {

        return view('admin.users.create');
    }
    public function store(Request $request)
    {
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
        }

        User::create([
            'name'  => $request->name,
            'email'  => $request->email,
            'password'  => $request->password,
            'phone'  => $request->phone,
            'status'  => $request->status ? 1 : 0,
            'image'  => $image_in_db,
        ]);
        return redirect()->route('admin.users.index')->with('Successfully', 'User Added Successfully');
    }

    public function show($id)
    {
    }


    protected function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.users.edit', compact('user'));
    }


    protected function update(UpdateUser $request, $id)
    {
        // dd($request->all());

        $user = User::where('id', $id)->first();

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
        }

            $user->update($request->safe()->all());
        return redirect()->route('admin.users.index')->with('flash_message', 'User Updated successfully !');
    }

    public function delete($id)
    {
        $user = User::where('id', $id)->first();
        $user->delete();

        return back();
        flash()->success("User deleted successfully");
    }

    protected function logout(){

        auth()->logout();

        return redirect('/');
    }
}//end of controller
