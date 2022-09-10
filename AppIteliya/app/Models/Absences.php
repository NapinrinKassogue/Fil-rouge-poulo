<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absences extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'fichier',
        'motif',
        'datedebut',
        'datefin',
       ];


       public function user()
       {
           return $this->belongsTo(User::class, 'userId');
       }
    
}


