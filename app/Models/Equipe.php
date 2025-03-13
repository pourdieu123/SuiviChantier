<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'id_projets', 'id_chef_projets'];


    public function projet() {
        return $this->belongsTo(Projet::class, 'id_projets');
    }

    public function chefProjet() {
        return $this->belongsTo(ChefProjet::class, 'id_chef_projets');
    }
    public function Utilisateur() {
        return $this->hasMany(Utilisateur::class, 'id_equipes');
    }
}
