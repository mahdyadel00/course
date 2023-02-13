<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\PackageFeature;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Feature::create([
                'title'           => 'title',
                'description'     => 'description',
                'title_1'         => 'title_1',
                'description_1'   => 'description_1',
                'title_2'         => 'title_2',
                'description_2'   => 'description_2',
          ]);
    }
}

