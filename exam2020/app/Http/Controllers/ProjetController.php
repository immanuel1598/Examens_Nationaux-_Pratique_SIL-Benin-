<?php

namespace App\Http\Controllers;

use App\Models\Localite;
use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $projets =  Projet::all();
        return view('www.saisie', compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Localite::create(['nomLocalite'=>'cotonou']);
       $localites = Localite::all();
        return view('www.create', compact('localites'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'nomProjet' =>'required|string',
           'dateLancement' =>'required|date',
           'durée'=>'required',
           'localité'=>'required'
        ]);
        Projet::create([
            'nomProjet' =>$request->nomProjet,
            'dateLancement' =>$request->dateLancement,
            'durée'=>$request->durée,
            'codLocalite'=>$request->localité
        ]);
        return redirect()->route('projets.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projet $projet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projet $projet)
    {
        $localites = Localite::all();
        return view('www.edit', compact('projet','localites'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projet $projet)
    {
        $request->validate([
            'nomProjet' =>'required|string',
            'dateLancement' =>'required|date',
            'durée'=>'required',
            'localité'=>'required'
         ]);
        $projet->update([
            'nomProjet' =>$request->nomProjet,
            'dateLancement' =>$request->dateLancement,
            'durée'=>$request->durée,
            'codLocalite'=>$request->localité
        ]);
       
        return redirect()->route('projets.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projet $projet)
    {
        //
    }
}
