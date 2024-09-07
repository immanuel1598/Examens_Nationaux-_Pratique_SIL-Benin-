<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;
    protected $guarded= [];
    protected $primaryKey = 'idCommune';
    public function departement()
    {
        return $this->belongsTo(Departement::class, 'idDepartement','idDepartement');
    }
    public function arrondissements()
    {
        return $this->hasMany(Departement::class, 'idCommune','idCommune');
    }
}
