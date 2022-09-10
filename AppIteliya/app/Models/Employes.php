<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employes extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'adresse',
        'email',
        'poste',
        'password',
        'userId',
       ];


       public function absences()
       {
           return $this->hasMany(Absences::class, 'employes_Id');
       }

       public function user()
       {
           return $this->belongsTo(User::class, 'userId');
       }



       public function permission()
       {
           return $this->hasMany(Permissions::class, 'employesId');
       }
}
