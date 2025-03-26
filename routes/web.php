<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChefProjetController; 
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
    return view('master');
});
// Authentication
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
 
    // Chef de projet management
    
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
    


    Route::get('/chef-projets/create', function () {
        return view('chef-projets.create'); // Assurez-vous que cette vue existe
    })->name('chef-projets.create');
    
    Route::middleware(['web'])->group(function () {
        Route::post('/chef-projets', [ChefProjetController::class, 'store'])->name('chef-projets.store');
    });
    
    

require __DIR__.'/auth.php';
