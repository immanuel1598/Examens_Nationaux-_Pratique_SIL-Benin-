<?php

namespace App\Http\Controllers;

use App\Models\Artiste;
use App\Models\Categorie;
use App\Models\Oeuvre;
use Illuminate\Http\Request;

class OeuvreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $oeuvres = Oeuvre::all();
        return view('site.index', compact('oeuvres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artistes = Artiste::all();
        $categories = Categorie::all();
        return view('site.create', compact('artistes','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' =>'required|string',
            'description'=> 'required|string',
            'année' =>'required|integer',
            'categorie' =>'required',
            'artiste' =>'required'
        ]);
Oeuvre::create([
    'nom' =>$request->nom,
    'description'=> $request->description,
    'année' =>$request->année,
    'idCategorie' =>$request->categorie,
    'idArtiste' =>$request->artiste
]);
return redirect()->route('oeuvres.index') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Oeuvre $oeuvre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Oeuvre $oeuvre)
    {
        $artistes = Artiste::all();
        $categories = Categorie::all();
        return view('site.edit', compact('artistes','categories','oeuvre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Oeuvre $oeuvre)
    {
        $request->validate([
            'nom' =>'required|string',
            'description'=> 'required|string',
            'année' =>'required|integer',
            'categorie' =>'required',
            'artiste' =>'required'
        ]);

        $oeuvre->nom =$request->nom;
        $oeuvre->description = $request->description;
        $oeuvre->année =$request->année;
        $oeuvre->idCategorie =$request->categorie;
        $oeuvre->idArtiste =$request->artiste;
        $oeuvre->save();
        return redirect()->route('oeuvres.index') ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Oeuvre $oeuvre)
    {
        $oeuvre->delete();
        return redirect()->route('oeuvres.index') ;
    }
}
