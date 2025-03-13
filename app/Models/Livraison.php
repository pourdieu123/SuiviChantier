<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livraison extends Model
{
    use HasFactory;
    protected $fillable = ['date_livraison',  'materiel', 'id_utilisateurs','id_chef_projets'];

  
    public function utilisateur() {
        return $this->belongsTo(Utilisateur::class, 'id_utilisateurs');
    }
    
    public function chef() {
        return $this->belongsTo(ChefProjet::class,'id_chef_projets');
    }
}
