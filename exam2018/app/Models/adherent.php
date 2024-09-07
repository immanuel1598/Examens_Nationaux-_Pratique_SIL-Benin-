<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adherent extends Model
{
    use HasFactory;
    protected $guarded= [];
    protected $primaryKey = 'Idadh';
    public function inscriptions()
    {
        return $this->hasMany(Inscription::class, 'Idadh');
    }
}
