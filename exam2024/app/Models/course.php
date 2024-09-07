<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $guarded= [];
    protected $primaryKey = 'course_id';
    public function chauffeur()
    {
        return $this->belongsTo(chauffeur::class, 'chauffeur_id', 'chauffeur_id');
    }
}
