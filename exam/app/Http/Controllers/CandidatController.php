<?php

namespace App\Http\Controllers;


use App\Models\Candidat;
use App\Models\Filiere;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filieres =Filiere::all();
        if ($request->has('search')) {
            $search = $request->input('search');
            $candidats = Candidat::where('codefil', 'like', "%$search%")->get();
            
            return view('www.SITE.index', compact('candidats','filieres'));
        }
        
        $candidats = Candidat::all();
        
        return view('www.SITE.index', compact('candidats', 'filieres'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {  $filieres = Filiere::all();
      
        return view('www.SITE.saisie',compact('filieres'));
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $request->validate([
        'nom' => 'required|string|max:255',
        'prénom' => 'required|string|max:255',
        'datnais' => 'required|date',
        'ville' => 'required|string',
        'sexe' => 'required|in:M,F',
       
    ]);

    // Format the datnais date
    // $formattedDate = Carbon::createFromFormat('Y-m-d', $request->datnais)->format('Y/m/d');

    // Create a new Candidat instance
    $candidat = new Candidat();
    $candidat->nom = $request->nom;
    $candidat->prénom = $request->prénom;
    $candidat->datnais = $request->datnais;
    $candidat->ville = $request->ville;
    $candidat->sexe = $request->sexe;
    $candidat->codefil = $request->codefil;

    // Save the candidat
    $candidat->save();

    // Redirect to a success page or return a response
    return redirect()->route('candidats.index')->with('success', 'Candidat created successfully');
}


    /**
     * Display the specified resource.
     */
    public function show(Candidat $candidat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidat $candidat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Candidat $candidat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidat $candidat)
    {
        //
    }
}
