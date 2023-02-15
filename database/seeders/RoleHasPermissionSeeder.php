<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleHasPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::findByName('owner');
        $role->syncPermissions(Permission::all());

        $user = \App\Models\User::find(1);
        $user->assignRole('owner');

        $user->syncPermissions(Permission::all());
    }
}
