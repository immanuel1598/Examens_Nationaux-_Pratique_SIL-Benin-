<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cluster extends Model
{
    use HasFactory;
    protected $guarded= [];
    protected $primaryKey = 'idCluster';
    public function filiere()
    {
        return $this->belongsTo(Filiere::class, 'idFilière','idFilière');
    }
    public function village()
    {
        return $this->belongsTo(village::class, 'idVillage','idVillage');
    }
}
