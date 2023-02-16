<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageFeature extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price_id',
    ];

    public function pricing()
    {
        return $this->belongsTo(Pricing::class);
    }
}
