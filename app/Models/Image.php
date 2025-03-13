<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    
    protected $fillable = ['nom', 'chemin_fichier', 'taille', 'id_utilisateurs'];


    public function user() {
        return $this->belongsTo(Utilisateur::class,'id_utilisateurs' );
    }
}
