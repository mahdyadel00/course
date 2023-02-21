<?php

namespace Database\Seeders;

use App\Models\CompanySpeaker;
use Illuminate\Database\Seeder;

class CompanySpeakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CompanySpeaker::create([
            'name'          => 'LinkedIn',
            'link'          => 'https://www.linkedin.com',
            'image'         => 'https://www.linkedin.com',
        ]);
    }
}
