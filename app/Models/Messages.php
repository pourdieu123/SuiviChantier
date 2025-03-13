<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;
    protected $fillable = ['contenu', 'date_envoi', 'expediteur_id', 'destinataire_id'];

   
    public function expediteur() {
        return $this->belongsTo(Utilisateur::class, 'expediteur_id');
    }

    public function destinataire() {
        return $this->belongsTo(Utilisateur::class, 'destinataire_id');
    }
}
