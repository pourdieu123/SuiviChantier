<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Projet;
use App\Models\Rapport;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // ... autres méthodes ...

    public function creerChefProjet(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:chef_projets',
            'id_admins' => 'required|exists:admins,id',
        ]);

        $motdepasse = Str::random(12); // Génère un mot de passe aléatoire de 12 caractères

        ChefProjet::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'motdepasse' => Hash::make($motdepasse), // Hash le mot de passe avant de l'enregistrer
            'id_admins' => $request->id_admins,
        ]);

        // Envoi d'un e-mail à l'admin avec le mot de passe généré
        // ... (implémentez votre logique d'envoi d'e-mail ici) ...

        return redirect()->route('liste.chefprojets')->with('success', 'Chef de projet créé avec succès.');
    }
}


