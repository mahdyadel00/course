<?php

namespace Database\Seeders;

use App\Models\Settings;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PermissionTableSeeder::class,
            SettingsSeeder::class,
            SpeakerSeeder::class,
            UserSeeder::class,
            PolicesSeeder::class,
            FiillServySeeder::class,
            PackageFeatureSeeder::class,
            PricingSeeder::class,
            FeatureSeeder::class,
            CourseSeeder::class,
            SponserSeeder::class,
            MarketingSeeder::class,
            SliderSeeder::class,
            RoleHasPermissionSeeder::class,
            CountrySeeder::class,
            CitySeeder::class,
        ]);
    }
}
