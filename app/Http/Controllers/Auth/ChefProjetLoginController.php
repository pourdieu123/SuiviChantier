<?php 
namespace App\Http\Controllers\Auth;

use App\Models\ChefProjet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChefProjetLoginController extends Controller
{
    
    public function showLoginForm()
    {
        return view('auth.chef_projet_login');
    }

    public function login(Request $request)
    {
        // Validation des données
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Rechercher le chef de projet par email
        $chefProjet = ChefProjet::where('email', $request->email)->first();
    
        // Si aucun chef de projet trouvé
        if (!$chefProjet) {
            return back()->withErrors(['email' => 'Aucun chef de projet trouvé avec cet email.']);
        }
    
        // Vérification du mot de passe
        if (Hash::check($request->password, $chefProjet->motdepasse)) {
            // Connexion réussie
            Auth::login($chefProjet); // Maintenant ça devrait marcher
            return redirect()->route('chef-projets.board');
        }
    
        // Si le mot de passe est incorrect
        return back()->withErrors(['password' => 'Mot de passe incorrect.']);
    }
    
    public function logout()
    {
        Auth::guard('chef_projet')->logout();
        return redirect()->route('chef-projet.login');
    }
}

