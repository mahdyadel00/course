<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMarketing extends Model
{
    use HasFactory;

    protected $fillable  =  ['user_id', 'marketing_id'];
}
