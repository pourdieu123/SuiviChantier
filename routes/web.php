<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChefProjetController; 
use App\Http\Controllers\Auth\ChefProjetLoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
 
Route::get('/', function () {
    return view('dashboard');
});
// Authentication Admins
Route::post('/', [ChefProjetController::class, 'adminboard'])->name('dashboard');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Authentication Chef Projet

Route::prefix('chef-projet')->group(function () {
    Route::get('login', [ChefProjetLoginController::class, 'showLoginForm'])->name('chef-projet.login');
    Route::post('login', [ChefProjetLoginController::class, 'login']);
    Route::post('logout', [ChefProjetLoginController::class, 'logout'])->name('chef-projet.logout');
});

 
    // Chef de projet management
   

Route::middleware(['auth'])->group(function () {
    Route::resource('chef-projets', ChefProjetController::class);
});

    
    Route::get('/test-email', function () {
        try {
            Mail::raw('Ceci est un email de test de 7ELITE', function ($message) {
                $message->to('destinataire@gmail.com') // Remplace par un email de test
                        ->subject('Test Email Laravel');
            });
    
            return 'Email envoyé avec succès !';
        } catch (\Exception $e) {
            return 'Erreur : ' . $e->getMessage();
        }
    });

// Routes pour les Chefs de Projet (protection par authentification)
Route::middleware(['auth'])->group(function () {

    Route::get('/chef-projets/create', [ChefProjetController::class, 'create'])->name('chef-projets.create');
    Route::get('/chef-projets', [ChefProjetController::class, 'liste'])->name('chef-projets.liste');

    // Route pour enregistrer un nouveau Chef de projet
    Route::post('/chef-projets', [ChefProjetController::class, 'store'])->name('chef-projets.store');

     // Route pour supprimer un Chef de projet
    Route::delete('/chef-projets/{id}', [ChefProjetController::class, 'destroy'])->name('chef-projets.destroy');
});

// Route pour la connexion (Chef de projet)
Route::post('/chef-projet/login', [ChefProjetLoginController::class, 'login'])->name('chef-projet.login');

// Route pour afficher la page de connexion du Chef de projet
Route::get('/chef-projet/login', function () {
    return view('auth.chef_projet_login'); // Vue de connexion à créer
})->name('chef-projet.login.form');

// Route protégée par authentification pour accéder au tableau de bord du Chef de Projet
// Route pour le tableau de bord du chef de projet

Route::get('/chef-projet/board', function () {
    return view('chef-projets.board');
})->name('chef-projets.board');


require __DIR__.'/auth.php';
