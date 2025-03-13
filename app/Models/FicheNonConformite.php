<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FicheNonConformite extends Model
{
    use HasFactory;
    protected $fillable = ['contenu','statut','date_creation','actions_correctives','id_projets','id_utilisateurs'];
    

   public function Projet(){
    return $this->hasMany(Projet::class, 'id_projets');
   }
   public function Use(){
    return $this->hasMany(Utilisateur::class, 'id_utilisateurs');
   }
}
