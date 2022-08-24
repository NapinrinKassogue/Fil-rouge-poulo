<?php

namespace App\Http\Controllers;

use App\Models\Administrateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');
        $user = Auth::user();
        // dd($user);
        if($user->statut == 'administrateur')
        {
            $administrateur = Administrateur::Where('userId', $user->id)->first();
            return view('administrateurs.dashboard', compact('administrateur'));
        }
        elseif($user->statut == 'employes')
        {
            return view('employes.dashboard');
        }

       
      else{
            return view('home');
        }
    


    }

    public function liste()
    {
        return view('administrateurs.listeEmployes');
    }

    public function welcome()

    {
        return view('welcome');
    }
}
