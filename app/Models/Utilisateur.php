<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Utilisateur extends Model
{
    use HasFactory, HasRoles;
    protected $fillable = ['nom', 'email', 'motdepasse', 'role','id_equipes'];

   
    public function messagesEnvoyes() {
        return $this->hasMany(Messages::class, 'expediteur_id');
    }

    public function messagesRecus() {
        return $this->hasMany(Messages::class, 'destinataire_id');
    }

  
    public function images() {
        return $this->hasMany(Image::class,'id_utilisateurs');
    }

  
    public function team() {
        return $this->belongsTo(Equipe::class, 'id_equipes');
    }
     
    
}
