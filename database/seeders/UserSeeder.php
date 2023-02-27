<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name'        => 'Mahdy',
            'last_name'         => 'Adel',
            'name'              => 'Mahdy Adel',
            'roles_name'         => ['owner'],
            'birthdate'         => '2023-01-01',
            'address'           => 'Metghamer',
            'email'             => 'admin@email.com',
            'password'          => Hash::make("admin@123"),
            'phone'             => "01122907742",
            'education'         => "Fucaility of information systeam",
            'qulification'      => "test",
            'english'           => "Elementary",
            'fill_survy'        => 1,
            'policies'          => 1,
            'image'             => "mahdy.png",
            'qr_code'           => "qr code",
            'cv'                => "cv.pdf",
            'identy'            => "identy.img",
            'key_api'           => "key Api.pdf",
            'task'              => "task.pdf",
            'notes'             => "notes.pdf",
            'country_id'        => 1,
            'city_id'           => 1,
            'pin_code'          => random_int(111111, 999999),
        ]);
    }
}
