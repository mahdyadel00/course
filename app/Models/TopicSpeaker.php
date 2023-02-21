<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopicSpeaker extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'description',
        'speaker_id',
        'start_time',
        'end_time',
        'link',
        'days',
    ];


    public function speaker()
    {
        return $this->belongsTo(Speaker::class);
    }
}
