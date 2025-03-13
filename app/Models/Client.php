<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    
    protected $fillable = ['nom', 'email', 'telephone', 'motdepasse'];
    
  
    public function projets() {
        return $this->hasMany(Projet::class);
    }
}
