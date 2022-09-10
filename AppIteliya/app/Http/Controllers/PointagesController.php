<?php

namespace App\Http\Controllers;

use App\Models\Employes;
use App\Models\Pointage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PointagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pointer=Pointage::where('presence', '=','Present')->get();
        return view('pointages.pointagesCreate', compact('pointer'));
    }

    public function touslespointages()
    {
        $employes = Employes:: all();
        $touspointages=Pointage::where('presence', '=','Pointé')->get();
        return view('pointages.touslespointages', compact('touspointages','employes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        
        $user = Auth::User();
        $validation = $request->validate(
            [
                'presence' => ['required'],

                
            ]
        );

        if($validation)

   
        {
            $user = Auth::User();
            $permis = Pointage::create(
                [
                    'presence' => $request['presence'],
                    'userId'=> $user->id,
                ]
                );
                return redirect('/pointages');
          }
    


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $welcome = Pointage::findOrfail($id);
        return view('pointages.pointermondepart',compact('welcome'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $depart = $request->validate(
            [
                'presence'=>'required',
            ]);

        if($depart);
        {
           $aurevoir = Pointage::whereId($id)->update([

            'presence'=>'Pointé',
           ]);
        }    
        return redirect('/pointages')->with('success','Votre pointage du jour est maintenant effectué!!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
