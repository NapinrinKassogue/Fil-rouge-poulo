<?php

namespace App\Http\Controllers;

use App\Models\depart;
use Illuminate\Http\Request;

class DepartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employes.dashboard');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\depart  $depart
     * @return \Illuminate\Http\Response
     */
    public function show(depart $depart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\depart  $depart
     * @return \Illuminate\Http\Response
     */
    public function edit(depart $depart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\depart  $depart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, depart $depart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\depart  $depart
     * @return \Illuminate\Http\Response
     */
    public function destroy(depart $depart)
    {
        //
    }
}
