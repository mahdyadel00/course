<?php

namespace Database\Seeders;

use App\Models\Marketing;
use Illuminate\Database\Seeder;

class MarketingSeeder  extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Marketing::create([

            'title'       => 'Digital Marketing',
            'description' => 'Digital Marketing',
        ]);
    }
}

