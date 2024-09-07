<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oeuvre extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $primaryKey = 'idOeuvre';
    public function artiste(){
        return $this->belongsTo(Artiste::class,'idArtiste','idArtiste');
    }
    public function categorie(){
        return $this->belongsTo(Categorie::class,'idCategorie','idCategorie');
    }
}
