<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\{Role, Permission};

class RoleController extends Controller
{
    public function __construct()
    {
        collect(Route::getRoutes()->getRoutesByName())
            ->keys()
            ->filter(fn($route) => preg_match('/^admin\.roles/', $route))
            ->each(function ($route) {
                $this->middleware("permission:" . str_replace(['admin.', '.'], ['', '_'], $route), ['only' => last(explode('.', $route))]);
            });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission = Permission::where('guard_name', 'admin')->get();
        return view('admin.roles.create', compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        try {
            $result = DB::transaction(function () use ($request) {
                $role = Role::create(['name' => $request->name]);
                $role->syncPermissions($request->permissions);
                return $role;
            });
            return $result
                ? redirect()->route('admin.roles.index')->withSuccess('Role created successfully.')
                : back()->withErrors('Something went wrong, please try again later.');
        } catch (\Exception $e) {
            return back()->withErrors('Something went wrong, please try again later.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::find($id);
        $rolePermissions = Permission::join("role_has_permissions", "role_has_permissions.permission_id", "=", "permissions.id")
            ->where("role_has_permissions.role_id", $id)
            ->get();
        return view('admin.roles.show', compact('role', 'rolePermissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        $permission = Permission::where('guard_name', 'admin')->get();
        $rolePermissions = $role->permissions->pluck('id')->toArray();
        return view('admin.roles.edit', compact('role', 'permission', 'rolePermissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->guard_name = 'admin';
        $role->save();
        $role->syncPermissions($request->input('permissions'));
        return redirect()->route('admin.roles.index')->withSuccess('Role updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        try {
            $result = DB::transaction(function () use ($id) {
                $role = Role::find($id);
                if ($role) {
                    $role->delete();
                    $role->permissions()->detach();
                }
                return $role;
            });

            return $result
                ? redirect()->route('admin.roles.index')->withSuccess('Role deleted successfully.')
                : back()->withErrors('Something went wrong, please try again later.');

        } catch (\Exception $e) {
            return back()->withErrors('Something went wrong, please try again later.');
        }
    }
}
