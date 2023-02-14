<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'title_1',
        'description_1',
        'title_2',
        'description_2',
        'image',
        'image_1',
        'course_file',
    ];
    
}
