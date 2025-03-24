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
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }

    // public function dashboard()
    // {
    //     $totalChefsProjets = User::where('role', 'chef_projet')->count();
    //     $totalClients = User::where('role', 'client')->count();
    //     $totalProjets = Projet::count();
    //     $projetsEnCours = Projet::where('statut', 'en_cours')->count();
        
    //     return view('admin.dashboard', compact(
    //         'totalChefsProjets', 
    //         'totalClients', 
    //         'totalProjets', 
    //         'projetsEnCours'
    //     ));
    // }

    public function createChefProjetForm()
    {
        return view('chefprojet.createcp');
    }

    public function storeChefProjet(Request $request)
{
    $request->validate([
        'nom' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'role' => 'required|in:chef_projet,client', // Correction et validation du rôle
    ]);

    // Génération du code de connexion
    $codeConnexion = strtoupper(Str::random(8));
    $user = User::create([
        'nom' => $request->nom,
        'email' => $request->email,
        'role' => $request->role, 
        'code_connexion' => $codeConnexion,
        'password' => Hash::make(Str::random(16)) 
    ]);

    return redirect()->route('admin.chefs_projets')
        ->with('success', ucfirst(str_replace('_', ' ', $request->role)) . ' créé avec succès. Code de connexion: ' . $codeConnexion);
}


     

    // public function createClientForm()
    // {
    //     return view('admin.create_client');
    // }

    public function storeClient(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'telephone' => 'nullable|string|max:20',
        ]);
    //     // Generate connection code
    //     $codeConnexion = strtoupper(Str::random(8));
        
        // Create user
        // $user = User::create([
        //     'nom' => $request->nom,
        //     'email' => $request->email,
        //     'telephone' => $request->telephone,
        //     'role' => 'client',
        //     'code_connexion' => $codeConnexion,
        //     'password' => Hash::make(Str::random(16)) // Random password since they'll use code
        // ]);

        // return redirect()->route('admin.clients')
        //     ->with('success', 'Client créé avec succès. Code de connexion: ' . $codeConnexion);
    }

    public function listChefsProjets()
    {
        $chefsProjets = User::where('role', 'chef_projet')->get();
        return view('', compact('chefsProjets'));
    }

    // public function listClients()
    // {
    //     $clients = User::where('role', 'client')->get();
    //     return view('admin.clients', compact('clients'));
    // }

    // public function listProjets()
    // {
    //     $projets = Projet::with(['client', 'chefProjet'])->get();
    //     return view('admin.projets', compact('projets'));
    // }

    // public function viewProjet($id)
    // {
    //     $projet = Projet::with(['client', 'chefProjet', 'equipes', 'fichesControle', 'rapports'])
    //         ->findOrFail($id);
        
    //     return view('admin.view_projet', compact('projet'));
    // }

    // public function deleteProjet($id)
    // {
    //     $projet = Projet::findOrFail($id);
    //     $projet->delete();
        
    //     return redirect()->route('admin.projets')
    //         ->with('success', 'Projet supprimé avec succès');
    // }

    // public function listRapports()
    // {
    //     $rapports = Rapport::with(['projet', 'chefProjet'])->get();
    //     return view('admin.rapports', compact('rapports'));
    // }

    // public function viewRapport($id)
    // {
    //     $rapport = Rapport::with(['projet', 'chefProjet'])->findOrFail($id);
    //     return view('admin.view_rapport', compact('rapport'));
    // }

    // public function validateRapport(Request $request, $id)
    // {
    //     $rapport = Rapport::findOrFail($id);
    //     $rapport->statut = 'validé';
    //     $rapport->id_admin = auth()->id();
    //     $rapport->save();
        
    //     return redirect()->route('admin.rapports')
    //         ->with('success', 'Rapport validé avec succès');
    // }

    // public function rejectRapport(Request $request, $id)
    // {
    //     $request->validate([
    //         'motif_rejet' => 'required|string'
    //     ]);

    //     $rapport = Rapport::findOrFail($id);
    //     $rapport->statut = 'rejeté';
    //     $rapport->motif_rejet = $request->motif_rejet;
    //     $rapport->id_admin = auth()->id();
    //     $rapport->save();
        
    //     return redirect()->route('admin.rapports')
    //         ->with('success', 'Rapport rejeté avec succès');
    // }
}


