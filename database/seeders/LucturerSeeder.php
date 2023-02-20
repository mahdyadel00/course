<?php

namespace Database\Seeders;

use App\Models\Lucturer;
use Illuminate\Database\Seeder;

class LucturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lucturer::create([
            'name'        => 'Mahdy',
            'description' => 'Mahdy is a web developer',
            'address'     => 'Egypt',
            'personal_info' => 'Mahdy is a web developer',
            'email'       => 'mahdy@email.com',
            'phone'       => '01000000000',
            'image'       => 'speaker-1.jpg',
            'website'     => 'https://mahdy.com',
            'twitter'     => 'https://twitter.com/mahdy',
            'behance'     => 'https://behance.com/mahdy',
            'linkedin'    => 'https://linkedin.com/mahdy',
            'vimeo'       => 'https://vimeo.com/mahdy',
            'instagram'   => 'https://instagram.com/mahdy',
            'facebook'    => 'https://facebook.com/mahdy',
            'tiktok'      => 'https://tiktok.com/mahdy',
            'youtube'     => 'https://youtube.com/mahdy',
            'job_title'   => 'Web Developer',
        ]);
    }
}
