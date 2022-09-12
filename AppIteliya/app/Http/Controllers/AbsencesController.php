<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\Models\Absences;
use App\Models\Employes;
use App\Models\JustifierAbsences;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AbsencesController extends Controller
{
    //

    public function viewabsence()
    {
        $user = User::all();
        $justifier = Employes::all();
        return view('absences.absenceCreate', compact('justifier', 'user'));
    }

    public function registerabsence(Request $request)
    {
        $user = Auth::User();
        $validation = $request->validate(
            [
                'datedebut' => ['required', 'date'],
                'datefin' => [ 'required', 'date'],
                'fichier'  => 'required|mimes:pdf|max:3000',
                'motif' => ['required', 'string', 'max:500'],
                'userId' => ['required', 'integer'],
                
            ]
        );

        if($validation)
   
        {
            $user = Auth::User();
            $fileName = time().'.'.$request->fichier->extension();
            $request->fichier->move(public_path('images/piècejustificatif'), $fileName);
            $absence = Absences::create(
                [  
                    'datedebut' => $request['datedebut'],
                    'datefin' => $request['datefin'],               
                    'fichier' => '$fileName',
                    'userId' =>$request['userId'],
                    'motif' => $request['motif'], 
                    
                ]
                );
                return view('/employes.dashboard');
          }
    }

    public function downfunc()
    {
        $downloads = Absences::all();
        return view('/administrateurs.justifierAbsence', compact('downloads'));
    }



    public function listeAbsence()
    {
       
       
        $justifier = Absences::all();

        return view('administrateurs.justifierAbsence', compact('justifier'));
    }
}
