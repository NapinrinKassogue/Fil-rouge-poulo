<?php

namespace App\Http\Controllers;

use App\Models\Permissions;
use App\Models\User;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    //

    public function viewpermission()
    {
        return view('permissions.permissionCreate');
    }

    public function registerpermission(Request $request)
    {
        $validation = $request->validate(
            [
                'nom' => ['required', 'string', 'max:100'],
                'prenom' => ['required', 'string', 'max:150'],
                'email' => ['required', 'string', 'max:100'],
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
            $permis = Permissions::create(
                [
                    'nom' => $request['nom'],
                    'prenom' => $request['prenom'],
                    'email' => $request['email'],
                    'motif' => $request['motif'], 
                    'userId' =>$user->id,
                ]
                );
                return view('/welcomeiteliya');
          }
    }


    
    public function listePermission()
    {
        $lespermissions = permissions::all();
        return view('administrateurs.lespermissions', compact('lespermissions'));
    }



        
}
