<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suivi extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $primaryKey = 'numSuivi';
    public function projets(){
        return $this->belongsTo(Localite::class,'codeProjet','codeProjet');
    }
}
