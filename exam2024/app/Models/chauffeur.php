<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chauffeur extends Model
{
    use HasFactory;
    protected $guarded= [];
    protected $primaryKey = 'chauffeur_id';
    public function courses()
    {
        return $this->hasMany(course::class, 'chauffeur_id', 'chauffeur_id');
    }
}
