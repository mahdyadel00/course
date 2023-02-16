<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create([

            'name'  => 'Egypt',
            'code'  => 'EG',
            'flag'  => asset('dashboard/assets/img/egypt.jpg'),

        ]);
    }
}
