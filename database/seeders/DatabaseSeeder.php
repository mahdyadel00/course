<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'first_name' => 'Mahdy',
            'last_name' => 'Adel',
            'user_name' => 'Mahdy Adel',
            'birthdate' => '2023-01-01',
            'address' => 'Metghamer',
            'email' => 'admin@email.com',
            'password' => Hash::make("password"),
            'phone' => "01122907742",
            'education' => "Fucaility of information systeam",
            'qulification' => "test",
            'english' => "Elementary",
            'fill_survy' => 1,
            'policies' => 1,
            'image' => "mahdy.png",
            'qr_code' => "qr code",
            'cv' => "cv.pdf",
            'identy' => "identy.img",
            'key_api' => "key Api.pdf",
            'task' => "task.pdf",
            'notes' => "notes.pdf",
        ]);
    }
}
