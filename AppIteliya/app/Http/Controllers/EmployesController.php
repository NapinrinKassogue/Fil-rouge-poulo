<?php

namespace App\Http\Controllers;

use App\Models\Absences;
use App\Models\Employes;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployesController extends Controller
{
    //

    public function viewEmploy()
    {
        $justifier = Employes::all();
        $employes = Absences::all();
        return view('employes.justifierAbsence', compact('employes', 'justifier'));  
          
        //return view('employes.employesCreate');
    }

    public function registerEmploye(Request $request)
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
                'statut' => 'employes' 
                
            ]
        );
            
        if($validation)
        {
        
          $user = User::create(
          [
            'name' => $request['prenom'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'statut' => 'employes' 
          ]
          );

          if($user)
          {
            $administrateur = Employes::create(
                [
                    'nom' => $request['nom'],
                    'prenom' => $request['prenom'],
                    'telephone' => $request['telephone'],
                    'adresse' => $request['adresse'],
                    'email' => $request['email'],
                    'poste' => $request['poste'],
                    'password' => bcrypt($request['password']),
                    'userId' =>$user->id,
                    'statut' => 'employes' 
                ]
                );
                return view('/administrateurs.dashboard');
          }
        }
    }
    public function dashboard()
    {
        return view('employes.dashboard');
    }

    public function listeEmployes()
    {
        $listeEmployes = Employes::all();
        return view('administrateurs.listeEmployes', compact('listeEmployes'));
    }


    public function ajouter()
    {
        return view('employes.employesCreate');
    }


    public function show($id)
    {
        
        $voir = Employes::findOrFail($id);
        return view('employes.show', compact('voir'));
    }


    public function destroy($id)
    {
        
        $supprime = Employes::findOrFail($id);
        $supprime->delete();
        $listeEmployes = Employes::all();
        return view('administrateurs.listeEmployes', compact('listeEmployes'));
        // return redirect('administrateurs.listeEmployes');
    }

    public function edit($id)
    {
        
        $modifie = Employes::findOrFail($id);
        return view('employes.edit', compact('modifie'));
    }

    public function update(Request $request, $id)
    {
        
        $rafraichir = $request->validate([
            'nom'=>'required ',
            'prenom'=>'required',
            'telephone'=>'required', 
            'adresse'=>'required',
            'email'=>'required',
            'poste'=>'required', 
        ]);
        Employes::whereId($id)->update($rafraichir);
        return redirect('administrateurs.listeEmployes');
    }


    public function viewpermission()
    {
        
        return view('employes.permissionCreate');
    }


    public function viewabsence()
    {
        return view('employes.absenceCreate');
    }

    public function auth()
    {
        $user = Auth::user();

        Auth()->user()->name;
    
    }

    
    public function listeAbsence()
    {
        $justifier = Absences::all();
        $employes = Employes::all();
        return view('administrateurs.justifierAbsence', compact('employes', 'employes', 'justifier'));
    }


    public function appel()
    {
        $absences = Employes::all();
        return view('employes.dashboard', compact('absences'));
    }



    public function viewHeure()
    {
        
        return view('employes.pointages');
    }


       



    
    
 
    



    

    
}
