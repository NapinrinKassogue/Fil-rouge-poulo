<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'userId',
        'motif',
        'datedebut',
        'datefin',

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }
 
}
