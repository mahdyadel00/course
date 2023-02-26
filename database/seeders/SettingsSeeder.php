<?php

namespace Database\Seeders;

use App\Models\Settings;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Settings::create([
            'title'             => 'title',
            'description'       => 'description',
            'logo'              => 'logo.png',
            'image'             => 'image.png',
            'main_image'        => 'image.png',
            'address'           => 'address',
            'facebook_link'     => 'facebook_link',
            'twitter_link'      => 'twitter_link',
            'youtube_link'      => 'youtube_link',
            'instagram_link'    => 'instagram_link',
            'linkedin_link'     => 'linkedin_link',
            'dribble_link'      => 'dribble_link',
            'behance_link'      => 'behance_link',
            'vimeo_link'        => 'vimeo_link',
            'start_from'        => '08:00:00',
            'end_at'            => '17:00:00',
            'email'             => 'geexar.email.com',
            'phone'             => '01122907742',

        ]);
    }
}
