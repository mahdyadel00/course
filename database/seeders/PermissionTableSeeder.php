<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        $permissions =  [

            'role-list',
            'role_create',
            'role_edit',
            'role_delete',

            'settings',
            'settings_update',

            'users',
            'user_create',
            'user_update',
            'user_delete',

            'speakers',
            'speakers_create',
            'speakers_update',
            'speakers_delete',

            'contact',
            'contact_create',
            'contact_update',
            'contact_delete',


        ];

        foreach ($permissions as $permission) {

            Permission::create(['name' => $permission]);
        }
    }
}
