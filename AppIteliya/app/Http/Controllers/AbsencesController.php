<?php

namespace App\Http\Controllers;

use App\Models\Absences;
use App\Models\User;
use Illuminate\Http\Request;

class AbsencesController extends Controller
{
    //

    public function viewabsence()
    {
        return view('absences.absenceCreate');
    }

    public function registerabsence(Request $request)
    {
        $validation = $request->validate(
            [
                'nom' => ['required', 'string', 'max:100'],
                'prenom' => ['required', 'string', 'max:150'],
                'email' => ['required', 'string', 'max:100'],
                'fichier' => ['required', 'string', 'max:100'],
                'motif' => ['required', 'string', 'max:500'],
                
            ]
        );

        if($validation)

        $user = User::create(
            [
              'name' => $request['prenom'],
              'email' => $request['email'],
              'password' => bcrypt($request['password']),
              'statut' => 'employes' 
            ]
            );
   
        {
            $absence = Absences::create(
                [
                    'nom' => $request['nom'],
                    'prenom' => $request['prenom'],
                    'email' => $request['email'],
                    'fichier' => $request['fichier'],
                    'motif' => $request['motif'], 
                    'userId' =>$user->id,
                ]
                );
                return view('/welcome');
          }
    }



    public function listeAbsence()
    {
        $justifier = absences::all();
        return view('administrateurs.justifierAbsence', compact('justifier'));
    }


   
}
