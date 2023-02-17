<?php

namespace Database\Seeders;

use App\Models\UserMarketing;
use Illuminate\Database\Seeder;

class UserMarketingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserMarketing::create([

            'user_id'      => 1,
            'marketing_id' => 1,
        ]);
    }
}
