<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanySpeaker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'link',
        'image',
    ];


    public function speakers()
    {
        return $this->hasMany(Speaker::class);
    }
}
