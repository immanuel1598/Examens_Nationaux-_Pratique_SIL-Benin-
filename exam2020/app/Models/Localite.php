<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localite extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $primaryKey = 'codLocalite';
    public function projets(){
        return $this->hasMany(projet::class,'codLocalite');
    }
}
