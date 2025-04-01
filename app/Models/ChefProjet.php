<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ChefProjet extends  Authenticatable // Utilise Authenticatable ici
{
    use HasFactory,Notifiable;
    protected $fillable = ['nom', 'email', 'motdepasse','id_admins'];
    protected $hidden = [
        'motdepasse', 'remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->motdepasse;
    }
    
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



