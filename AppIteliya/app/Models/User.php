<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'statut',
    ];


    public function administrateur()
    {
        return $this->hasMany(Administrateur::class, 'userId');
    }


    public function Employes()
    {
        return $this->hasMany(Employes::class, 'userId');
    }


    public function Absences()
    {
        return $this->hasMany(Absences::class, 'userId');
    }


    public function Permissions()
    {
        return $this->hasMany(Permissions::class, 'userId');
    }

    public function Pointages()
    {
        return $this->hasMany(Pointage::class, 'userId');
    }





    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
