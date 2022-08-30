<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class depart extends Model
{
    use HasFactory;
    protected $fillable = [
        'userid',
        'pointageid'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'userId');
    }
    public function pointage(){
        return $this->belongsTo(Pointages::class, 'pointageid');
    }
}

