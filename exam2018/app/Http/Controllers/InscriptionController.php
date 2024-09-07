<?php

namespace App\Http\Controllers;

use App\Models\adherent;
use App\Models\inscription;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $inscriptions = inscription::all();



    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $adherents = adherent::all();
        return view('www.inscription', compact( 'adherents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required|string',
            'prénom' =>'required|string',
            'datnais'=>'required|date',
            'sexe' =>'required|in:M,F',
            'année'=>'required',
            'ville'=>'required|string',
            'domaine'=>'required|string',
            'dateinscription' =>'required|date'
        ]);
      $use =  adherent::create(
        ['nom' =>$request->nom,
        'prénom'=>$request->prénom,
        'datnais'=>$request->datnais,
        'ville'=>$request->ville,
        'sexe'=>$request->sexe]);

        inscription::create(
        ['idadh' =>$use->Idadh,
        'année'=>$request->année,
        'dateinscription'=>$request->dateinscription,
        'domaine'=>$request->domaine,]

);
return redirect()->route('adherents.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(inscription $inscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(inscription $inscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, inscription $inscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(inscription $inscription)
    {
        //
    }
}
