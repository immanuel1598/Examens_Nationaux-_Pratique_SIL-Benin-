<?php

namespace App\Http\Controllers;

use App\Models\adherent;
use App\Models\inscription;
use Illuminate\Http\Request;

class AdherentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
    
        $année = $request->input('année');
        $domaine = $request->input('domaine');
    
        $adherents = Adherent::whereHas('inscriptions', function ($query) use ($année, $domaine) {
            $query->where('année', $année)
                  ->where('domaine', $domaine);
        })->get();
    
        $domaines = Inscription::distinct()->pluck('domaine');
        $années = Inscription::distinct()->pluck('année');
    
        return view('www.rechercheONG', compact('adherents', 'domaines', 'années'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(adherent $adherent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(adherent $adherent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, adherent $adherent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(adherent $adherent)
    {
        //
    }
}
