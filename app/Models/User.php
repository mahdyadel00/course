<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'name',
        'roles_name',
        'birthdate',
        'address',
        'email',
        'password',
        'education',
        'qulification',
        'english',
        'fill_survy',
        'policies',
        'image',
        'qr_code',
        'cv',
        'identy',
        'key_api',
        'task',
        'notes',
        'phone',
        'marketing_id',
        'google_id',
        'facebook_id',
        'instgram_id',
        'country_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'roles_name'        => 'array',
    ];

    public function marketing()
    {

        return $this->belongsTo(Marketing::class);
    }

    public function country(){

        return $this->belongsTo(Country::class);
    }
}
