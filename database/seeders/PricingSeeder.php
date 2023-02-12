<?php

namespace Database\Seeders;

use App\Models\Pricing;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Pricing::create([
                'title'           => 'title',
                'price'           => 'price',
                'description'     => 'description',
          ]);
    }
}
