<?php

namespace Database\Seeders;

use App\Models\FillServy;
use App\Models\Polices;
use Illuminate\Database\Seeder;

class FiillServySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FillServy::create([

            'faq' => 'Geexar',
            'answer' => 1,
        ]);
    }
}
