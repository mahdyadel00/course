<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'title'           => 'title',
            'description'     => 'description',
            'title_1'         => 'title_1',
            'description_1'   => 'description_1',
            'title_2'         => 'title_2',
            'description_2'   => 'description_2',
            'image'           => 'image',
            'image_1'         => 'image_1',
            'course_file'     => 'course_file',
        ]);
    }
}

