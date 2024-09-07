<?php

namespace App\Http\Controllers;

use App\Models\Arrondissement;
use App\Models\Cluster;
use App\Models\Commune;
use App\Models\Departement;
use App\Models\Filiere;
use App\Models\village;
use Illuminate\Http\Request;

class ClusterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $villages = village::all();
        $departements= Departement::all();
        $clusters = Cluster::orderBy('nom')->get() ;
        $arrondissements = Arrondissement::all();
        $filieres = Filiere::all();
        $communes =Commune::all();

        return view('view',compact('villages','filieres','departements','arrondissements','clusters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(request $request)
    {
        $villages = village::all();
        $departements= Departement::all();
        $clusters = Cluster::all();
        $arrondissements = Arrondissement::all();
        $filieres = Filiere::all();
        $communes =Commune::all();

        return view('form',compact('villages','filieres','departements','arrondissements','clusters','communes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'filière'=>'required',
            'departement'=>'required',
            'commune'=>'required',
            'arrondissement'=>'required',
            'village'=>'required',
            'cluster'=>'required|string',]);

            Cluster::create(['nom'=>$request->cluster,
        'idVillage' => $request->village,
         'idFilière' => $request->filière
    ]);
    return redirect()->route('cluster.index') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Cluster $cluster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cluster $cluster)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cluster $cluster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cluster $cluster)
    {
        //
    }
}
