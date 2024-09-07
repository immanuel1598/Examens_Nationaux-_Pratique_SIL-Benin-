<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inscription extends Model
{
    use HasFactory;
    protected $guarded= [];
    protected $primaryKey = ['Idadh', 'année'];
    public $incrementing = false;
    public function adherent()
    {
        return $this->belongsTo(Adherent::class, 'Idadh', 'Idadh');
    }
}
