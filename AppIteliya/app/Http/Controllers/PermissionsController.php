<?php

namespace App\Http\Controllers;

use App\Models\Employes;
use App\Models\Permissions;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermissionsController extends Controller
{
    //

    public function viewpermission()
    {
        $permis =  Employes::all();
        $permissions = Permissions::all();
        return view('permissions.permissionCreate', compact('permissions', 'permis'));
    }

    public function registerpermission(Request $request)
    {
        $user = Auth::User();
        $validation = $request->validate(
            [
                'datedebut' => ['required', 'date'],
                'datefin' => ['required', 'date'],
                'motif' => ['required', 'string', 'max:100'],
                'userId' => ['required', 'integer'],

                
            ]
        );

        if($validation)

   
        {
            $user = Auth::User();
            $permis = Permissions::create(
                [
                    'datedebut' => $request['datedebut'],
                    'datefin' => $request['datefin'],
                    'motif' => $request['motif'], 
                    'userId' =>$request['userId'],
                ]
                );
                return view('/employes.dashboard');
          }
    }


    
    public function listePermission()
    {
        $lespermissions = permissions::all();
        return view('administrateurs.lespermissions', compact('lespermissions'));
    }



        
}
