<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = ['nom','email','motdepasse'];
    
    public function Chefprojet(){
        return $this->hasMany(ChefProjet::class, 'id_admins');
    }
    
    public function FicheControle(){
        return $this->hasMany(FicheDeControle::class, 'id_admins');
    }
}
