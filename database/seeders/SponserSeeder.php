<?php

namespace Database\Seeders;

use App\Models\Sponser;
use Illuminate\Database\Seeder;

class SponserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sponser::create([
            'name' => 'Sponser',
            'image' => 'sponserimage.png',
            'linke' => 'linkelinke.png',

        ]);
    }
}
