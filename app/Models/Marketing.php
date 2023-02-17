<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marketing extends Model
{
    use HasFactory;

    protected $fillable = ['title' , 'description'];


    public function users()
    {
        return $this->belongsToMany(User::class , 'user_marketings', 'marketing_id', 'user_id');
    }
}
