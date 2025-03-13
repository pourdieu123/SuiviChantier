<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    use HasFactory;
    protected $fillable = ['type', 'date','contenu', 'id_projets', 'id_chef_projets'];

    
    public function projet() {
        return $this->belongsTo(Projet::class, 'id_projets');
    }

   
    public function chef() {
        return $this->belongsTo(ChefProjet::class, 'id_chef_projets');
    }
}
