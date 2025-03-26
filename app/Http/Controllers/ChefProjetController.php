<?php
namespace App\Http\Controllers;

use App\Models\ChefProjet;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ChefProjetController extends Controller
{
 
     
    public function create()
    {
        return view('chefprojet.create-chef-projet'); // Vue du formulaire
    }
    public function store(Request $request)
    {
        // Validation des données d'entrée
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|unique:chef_projets,email',
        ]);
    
        // Génération d'un mot de passe
        $password = \Str::random(8);
    
        // Création du chef de projet
        $chefProjet = ChefProjet::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'motdepasse' => Hash::make($password),
            'id_admins' => auth()->id(),
        ]);
    
    
        // Envoi de l'email
        try {
            Mail::to($request->email)->send(new \App\Mail\SendPasswordMail($chefProjet, $password));
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de l\'envoi de l\'email : ' . $e->getMessage());
        }
    
        // Redirection avec succès
        return redirect()->route('chef-projets.store')->with('success', 'Chef de Projet créé avec succès et email envoyé.');
    }
    
}
