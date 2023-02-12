<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Country;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\User\UpdateUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
//pdf
use  PDF;

use Illuminate\Support\Facades\Session;
use PharIo\Manifest\RequiresElement;
use Stevebauman\Location\Facades\Location;

class UserController extends Controller
{

    public function __construct()
    {
        //		$this->middleware('guest')->except('logout');
        // $this->middleware('auth:admin')->except('logout');
    }
    protected function index()
    {

        $users = User::get();
        return view('admin.users.index', compact('users'));
    } // end of index

    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        return view(
            'admin.users.create',
            compact('roles')
        );
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
        }
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
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $user->assignRole($request->input('roles_name'));
        return redirect()->route('admin.users.index')->with('Successfully', 'User Added Successfully');
    }

    public function show($id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.users.show', compact('user'));
    }


    protected function edit($id)
    {
        $user = User::where('id', $id)->first();
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();
        return view('admin.users.edit', compact('user', 'roles', 'userRole'));
    }


    protected function update(Request $request, $id)
    {
        // dd($request->all());
        // $user = User::where('id', $id)->first();
        // $image_in_db = NULL;
        // if ($request->has('image')) {
        //     $request->validate([
        //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
        //     ]);
        //     $path = public_path() . '/uploads/users';
        //     $image = request('image');
        //     $image_name = time() . request('image')->getClientOriginalName();
        //     $image->move($path, $image_name);
        //     $image_in_db = '/uploads/users/' . $image_name;
        // } else {
        //     $image_in_db = $user->image;
        // }
        // //identy
        // $identy_in_db = NULL;
        // if ($request->has('identy')) {
        //     $request->validate([
        //         'identy' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
        //     ]);
        //     $path = public_path() . '/uploads/users';
        //     $identy = request('identy');
        //     $identy_name = time() . request('identy')->getClientOriginalName();
        //     $identy->move($path, $identy_name);
        //     $identy_in_db = '/uploads/users/' . $identy_name;
        // } else {
        //     $image_in_db = $user->identy;
        // }
        // //upload cv
        // $cvName = null;
        // if ($request->hasFile('cv')) {
        //     $cv = $request->file('cv');
        //     $cvName = time() . '.' . $cv->getClientOriginalExtension();
        //     $cv->move(public_path('uploads/users/cv'), $cvName);
        // } else {
        //     $image_in_db = $user->cv;
        // }

        $user = User::where('id', $id)->first();
        $input = $request->all();
        $user->update($input);
        //     'first_name'    => $request->first_name,
        //     'last_name'     => $request->last_name,
        //     'name'          => $request->name,
        //     'email'         => $request->email,
        //     // 'password'      => Hash::make($request->password),
        //     'phone'         => $request->phone,
        //     'birthdate'     => $request->birthdate,
        //     'address'       => $request->address,
        //     'education'     => $request->education,
        //     'qulification'  => $request->qulification,
        //     'english'       => $request->english,
        //     'task'          => $request->task,
        //     'notes'         => $request->notes,
        //     'status'        => $request->status ? 1 : 0,
        //     'policies'      => $request->policies ? 1 : 0,
        //     'fill_survy'    => $request->fill_survy ? 1 : 0,
        //     'image'         => $image_in_db,
        //     'identy'        => $identy_in_db,
        //     'cv'            => $cvName,
        // ]);
        // dd($user);
        DB::table('model_has_roles')->where('model_id', $id)->delete();

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

            $image_in_db = $user->identy;
        }
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
        } else {

            $image_in_db = $user->cv;
        }

        $user->update([
            'first_name'    => $request->first_name,
            'last_name'     => $request->last_name,
            'name'          => $request->name,
            'email'         => $request->email,
            'phone'         => $request->phone,
            'birthdate'     => $request->birthdate,
            'address'       => $request->address,
            'education'     => $request->education,
            'qulification'  => $request->qulification,
            'english'       => $request->english,
            'task'          => $request->task,
            'notes'         => $request->notes,
            'status'        => $request->status ? 1 : 0,
            'policies'      => $request->policies ? 1 : 0,
            'fill_survy'    => $request->fill_survy ? 1 : 0,
            'image'         => $image_in_db,
            'identy'        => $identy_in_db,
            'cv'            => $cv_in_db,
        ]);
        // DB::table('model_has_roles')->where('model_id', $id)->delete();
        $user->assignRole($request->input('roles'));
        return redirect()->route('admin.users.index')->with('flash_message', 'User Updated successfully !');
    }

    public function delete($id)
    {
        $user = User::where('id', $id)->first();
        $user->delete();

        return back();
        flash()->success("User deleted successfully");
    }

    protected function logout()
    {

        auth()->logout();

        return redirect('/');
    }

    public function download($id)
    {
        $user = User::where('id', $id)->first();

        $file_path = public_path($user->cv);
        return response()->download($file_path);
    }
}//end of controller
