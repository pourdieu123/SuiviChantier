<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FicheDeControle extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'contenu','date_creation', 'id_projets','id_chef_projets', 'id_admins','id_utilisateurs'];

    
    public function Projet() {
        return $this->belongsTo(Projet::class, 'id_projets');
    }

    
    public function Chefprojets() {
        return $this->belongsTo(Chefprojet::class,'id_chef_projets');
    }
    public function Adminis() {
        return $this->belongsTo(Admin::class,'id_admins');
    }
    
    public function Utilisateurs() {
        return $this->belongsTo(Uilisateur::class,'id_utilisateurs');
    }
}
