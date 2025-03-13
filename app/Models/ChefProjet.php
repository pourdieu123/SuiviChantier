<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChefProjet extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'email', 'motdepasse','id_admins'];
    
    public function admin() {
        return $this->belongsTo(Admin::class , 'id_admins');
    }

 
    public function projets() {
        return $this->hasMany(Projet::class , 'id_chef_projets');
    }

 
    public function equipes() {
        return $this->hasMany(Equipe::class, 'id_chef_projets');
    }
}

