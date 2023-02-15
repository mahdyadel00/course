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
                $guard = Route::getRoutes()->getRoutesByName()[$route]->getAction()['middleware'];
                $guard = in_array('auth:admin', $guard, true) ? 'admin' : 'web';
                return str_replace(array('admin.', '.'), array('', '_'), $route) . "@$guard";
            })
            ->filter(function ($route) {
                $route_name = explode("_", $route)[0];
                if (strpos($route_name, '@') !== false) {
                    $route_name = explode("@", $route_name)[0];
                }
                return !in_array($route_name,
                    ['sanctum', 'ignition', 'verification', 'chatify', 'pusher', 'do', 'auth',
                        'debugbar', 'facebook', 'google', 'password', 'register', 'login', 'logout',
                        'two-factor', 'email', 'confirm', 'verification', 'verification-notification',
                        'forgot-password', 'reset-password']);
            })
            ->each(function ($route) {
                Permission::firstOrCreate([
                    'name'       => explode("@", $route)[0],
                    'guard_name' => explode("@", $route)[1]
                ]);
            });
    }
}
