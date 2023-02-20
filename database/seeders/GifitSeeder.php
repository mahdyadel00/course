<?php

namespace Database\Seeders;

use App\Models\Gifit;
use Illuminate\Database\Seeder;

class GifitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gifit::create([

            'description' => '50% discount on GMC diploma for all attendees.',
            'image'       =>  'gifit.png',
        ]);
    }
}
