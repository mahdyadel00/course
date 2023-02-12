<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'description',
    ];

    public function feature()
    {
        return $this->belongsTo(Feature::class , 'price_id' , 'id');
    }
}
