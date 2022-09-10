<?php

namespace App\Http\Controllers;

use App\Models\Absences;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Administrateur;
use App\Models\Employes;

class AdministrateurController extends Controller
{
    //
    public function  viewAdmin()
    {
        $permis = Employes::all();
        return view('administrateurs.adminCreate', compact('permis'));
    }

    public function enregisAdmin(Request $request)
    {
        $validation = $request->validate(
            [
                'nom' => ['required', 'string', 'max:100'],
                'prenom' => ['required', 'string', 'max:150'],
                'telephone' => ['required', 'string', 'max:20'],
                'adresse' => ['required', 'string', 'max:200'],
                'email' => ['required', 'string', 'max:100'],
                'poste' => ['required', 'string', 'max:150'],
                'password' => ['required', 'string', 'min:8','max:20', 'confirmed'],
                
                
            ]
        );
            
        if($validation)
        {
        
          $user = User::create(
          [
            'name' => $request['prenom'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'statut' => 'administrateur' 
          ]
          );

          if($user)
          {
            $administrateurs = Administrateur::create(
                [
                    'nom' => $request['nom'],
                    'prenom' => $request['prenom'],
                    'telephone' => $request['telephone'],
                    'adresse' => $request['adresse'],
                    'email' => $request['email'],
                    'poste' => $request['poste'],
                    'password' => bcrypt($request['password']),
                    'userId' =>$user->id,
                    'statut' => 'administrateur' 
                ]
                );
                return view('/welcomeiteliya');
          }
        }
    }
    public function dashboard()
    {
        return view('administrateurs.dashboard');
    }
    

    public function show($id)
    {
        $employe = Employes::all();
        $voir = Administrateur::findOrFail($id);
        return view('permissions.show', compact('voir', 'employes'));
    }


    public function listeAbsence()
    {   
        $absence = Administrateur::all();
        $absences =  Employes::all();
        $justabsent = Absences::all();
        return view('administrateurs.justifierAbsence', compact('justabsent'));
    }




    

    

}


