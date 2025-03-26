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





    Route::get('/chef-projets/create', [ChefProjetController::class, 'create'])->name('chef-projets.create');


   Route::post('/chef-projets', [ChefProjetController::class, 'store'])->name('chef-projets.store');
    

require __DIR__.'/auth.php';
