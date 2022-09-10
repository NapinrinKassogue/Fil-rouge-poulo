<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pointage extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'userId',
        'presence',
        'jour',

    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User','userId');
    }
}
