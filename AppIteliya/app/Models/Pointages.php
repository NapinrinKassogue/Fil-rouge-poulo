<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pointages extends Model
{
    use HasFactory;

    protected $fillable = [
        'heure-arrivee',
        'heure-depart',
        'duree',
        'userId',
       ];
}
