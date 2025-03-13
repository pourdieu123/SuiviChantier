<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FicheTechnique extends Model
{
    use HasFactory;
    protected $fillable = ['nom','contenu','normes_et_standards','date_creation','id_projets'];
   
    public function Project(){
        return $this->belongsTo(Projet::class, 'id_projets');
    }

}
