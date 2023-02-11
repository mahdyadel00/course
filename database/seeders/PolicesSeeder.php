<?php

namespace Database\Seeders;

use App\Models\Polices;
use Illuminate\Database\Seeder;

class PolicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Polices::create([

            'title' => 'Geexar',
            'description' => 'this is the description',
        ]);
    }
}
