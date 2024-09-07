<?php

namespace App\Http\Controllers;

use App\Models\chauffeur;
use App\Models\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = course::all();
        return view('site.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $chauffeurs = chauffeur::all();
        return view('site.create', compact('chauffeurs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'point_depart' =>'required|string',
            'point_arrivee' =>'required|string',
            'date_heure' =>'required|date',
            'chauffeur'=>'required',
            'statut'=>'required|boolean',
        ]);
        course::create([
            'point_depart' =>$request->point_depart,
            'point_arrivee' =>$request->point_arrivee,
            'date_heure' =>$request->date_heure,
            'chauffeur_id'=>$request->chauffeur,
            'statut'=>$request->statut,
        ]);
        if($request->statut == 0){
        $disponible = chauffeur::find($request->chauffeur);
        $disponible->disponible = 0;
        $disponible->update();
        }
        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(course $course)
    {
        $chauffeurs = chauffeur::all();
        return view('site.edit', compact('course','chauffeurs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, course $course)
    {
        $request->validate([
            'point_depart' =>'required|string',
            'point_arrivee' =>'required|string',
            'date_heure' =>'required|date',
            'chauffeur'=>'required',
            'statut'=>'required|boolean',
        ]);

            $course->point_depart = $request->point_depart;
            $course->point_arrivee = $request->point_arrivee;
            $course->date_heure =$request->date_heure;
            if($course->chauffeur->disponible == 0){
                $disponible = chauffeur::find($course->chauffeur_id);
                $disponible->disponible = 1;
                $disponible->update();
            }
        
            $course->chauffeur_id = $request->chauffeur;
            $course->statut = $request->statut;
            $course->update();
            return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(course $course)
    {
        $disponible = chauffeur::find($course->chauffeur_id);
        $disponible->disponible = 1;
        $disponible->update();
        $course->delete();
        return redirect()->route('courses.index');
    }
}
