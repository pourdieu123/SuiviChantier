<?php
namespace App\Http\Controllers;

use App\Models\ChefProjet;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ChefProjetController extends Controller
{
 
    public function store(Request $request)
    {
        try {
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
    
            // Tentative d'envoi de l'email
            try {
                Mail::to($request->email)->send(new \App\Mail\SendPasswordMail($chefProjet, $password));
            } catch (\Exception $e) {
                // En cas d'échec d'envoi de l'email, journaliser l'erreur et informer l'utilisateur
                \Log::error('Erreur lors de l\'envoi de l\'email : ' . $e->getMessage());
                return back()->with('error', 'Chef de Projet créé, mais l\'email n\'a pas pu être envoyé. Veuillez vérifier les configurations email.');
            }
    
            // Si tout fonctionne, redirection avec succès
            return redirect()->route('chef-projets.create')->with('success', 'Chef de Projet créé avec succès et email envoyé.');
    
        } catch (\Exception $e) {
            // Gérer les erreurs générales (ex. erreur DB, validation, etc.)
            \Log::error('Erreur lors de la création du Chef de Projet : ' . $e->getMessage());
            return back()->with('error', 'Une erreur est survenue lors de la création du Chef de Projet. Veuillez réessayer.');
        }
    }


     public function liste()
    {
        $chefsDeProjets = ChefProjet::all(); // Récupère tous les chefs de projet
        return view('chef-projets.liste', compact('chefsDeProjets'));
    }

   
    public function create()
    {
        return view('chef-projets.create');
    }

    public function destroy($id)
    {
        $chefDeProjet = ChefProjet::findOrFail($id);
        $chefDeProjet->delete();

        return redirect()->route('chef-projets.liste')->with('success', 'Chef de projet supprimé avec succès.');
    }


    
}
