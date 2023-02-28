<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'currency',
        'paymentOptions',
        'user_id',
        'pricing_id',
        'status',
        'customerReference',
        'providerReferenceNumber',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pricing()
    {
        return $this->belongsTo(Pricing::class);
    }
}
