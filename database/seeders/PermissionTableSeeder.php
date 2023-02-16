<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect(Route::getRoutes()->getRoutesByName())
            ->keys()
            ->map(function ($route) {
                $guard = Route::getRoutes()->getRoutesByName()[$route]->getAction()['middleware'] ?? [];
                $guard = in_array('auth:admin', $guard, true) ? 'admin' : 'web';
                return str_replace(array('admin.', '.'), array('', '_'), $route) . "_$guard";
            })
            ->filter(function ($route) {
                return !in_array(explode("_", $route)[0],
                    ['sanctum', 'ignition', 'verification', 'chatify', 'pusher', 'do', 'auth',
                        'debugbar', 'facebook', 'google', 'password', 'register', 'login', 'logout',
                        'two-factor', 'email', 'confirm', 'verification', 'verification-notification',
                        'forgot-password', 'reset-password']);
            })
            ->each(function ($route) {
                Permission::create([
                    'name'       => implode('_', array_diff(explode("_", $route), [last(explode("_", $route))])),
                    'guard_name' => last(explode("_", $route)),
                ]);
            });
    }
}
