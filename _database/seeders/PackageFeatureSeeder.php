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

class PackageFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       PackageFeature::create([
            'title'           => 'title',
            'description'     => 'description',
            'price_id'        => '1',
        ]);
    }
}

