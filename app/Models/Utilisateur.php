<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Utilisateur extends Model
{
    use HasFactory, HasRoles,Notifiable;
    protected $fillable = ['nom', 'email', 'motdepasse', 'role','id_equipes'];

    protected $hidden = [
        'mot_de_passe', 'code_connexion',
    ];

    // Define relationships
    public function projets()
    {
        if ($this->role === 'client') {
            return $this->hasMany(Projet::class, 'client_id');
        } elseif ($this->role === 'chef_projet') {
            return $this->hasMany(Projet::class, 'chef_projet_id');
        } else {
            return null;
        }
    }

    public function equipe()
    {
        return $this->belongsTo(Equipe::class);
    }

    // Role checker methods
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isChefProjet()
    {
        return $this->role === 'chef_projet';
    }

    public function isClient()
    {
        return $this->role === 'client';
    }

    public function isControleur()
    {
        return $this->role === 'controleur';
    }

    // Generate a unique connection code
    public static function generateConnectionCode()
    {
        $code = strtoupper(Str::random(8));
        
        // Make sure the code is unique
        while (self::where('code_connexion', $code)->exists()) {
            $code = strtoupper(Str::random(8));
        }
        
        return $code;
    }
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
