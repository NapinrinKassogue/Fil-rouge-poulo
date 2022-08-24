<?php

namespace App\Http\Controllers;

use App\Models\Pointages;
use Illuminate\Http\Request;

class PointagesController extends Controller
{
    //

    public function  viewHeure()
    {
        return view('pointages.heuresCreate');
    }

    public function enregistrerHeures(Request $request)
    {
        $validation = $request->validate(
            [
                'heure-arrivee' => ['timestamps'],
                'heure-depart' => ['timestamps'],
                'duree' => ['time'],
                
            ]
        );
    
        $administrateurs = Pointages::create(
            [
                'heure-arrivee' => $request['timestamps'],
                'heure-depart' => $request['timestamps'],
                'duree' => $request['time'], 
            ]
            );
            return view('/welcome');
    
    }


            
}
