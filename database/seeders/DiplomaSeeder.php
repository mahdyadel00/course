<?php

namespace Database\Seeders;

use App\Models\Diploma;
use Illuminate\Database\Seeder;

class DiplomaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Diploma::create([
            'title'           => 'title',
            'price'           => 123,
            'description'     => 'description',
        ]);
    }
}
