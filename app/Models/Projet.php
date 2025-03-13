<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'description', 'date_debut', 'date_fin', 'statut','cout_estime','cout_reel', 'id_clients', 'id_chef_projets'];

  
    public function client() {
        return $this->belongsTo(Client::class , 'id_clients');
    }

    
    public function chefProjet() {
        return $this->belongsTo(ChefProjet::class , 'id_chef_projets');
    }

    public function equipes() {
        return $this->hasMany(Equipe::class,'id_projets' );
    }

    public function rapports() {
        return $this->hasMany(Rapport::class, 'id_projets');
    }
    
    public function FicheTechnique() {
        return $this->hasMany(FicheTechnique::class, 'id_projets');
    }
   
}


