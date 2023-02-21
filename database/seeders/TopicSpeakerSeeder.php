<?php

namespace Database\Seeders;

use App\Models\TopicSpeaker;
use Illuminate\Database\Seeder;

class TopicSpeakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TopicSpeaker::create([
            'title'       => 'Topic 1',
            'description' => 'Description 1',
            'speaker_id'  => 1,
            'start_time'  => '09:00:00',
            'end_time'    => '10:00:00',
            'link'        => 'https://www.youtube.com/watch?v=1',
            'days'        => 'First Day',
        ]);
    }
}
