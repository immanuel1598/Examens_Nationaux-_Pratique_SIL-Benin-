<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class village extends Model
{
    use HasFactory;
    protected $guarded= [];
    protected $primaryKey = 'idVillage';
    public function arrondissement()
    {
        return $this->belongsTo(Arrondissement::class, 'idArrondissement','idArrondissement');
    }
    public function clusters()
    {
        return $this->hasMany(Cluster::class, 'idVillage','idVillage');
    }
}
