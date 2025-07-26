<?php declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StartupController;

// Route d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home');

// Routes pour la startup
Route::get('/startup', [StartupController::class, 'index'])->name('startup');
Route::get('/startup/adn', [StartupController::class, 'adn'])->name('startup.adn');
Route::get('/startup/vision', [StartupController::class, 'vision'])->name('startup.vision');

// Route pour les projets
Route::get('/projets', [ProjectController::class, 'index'])->name('projects');
Route::get('/projets/{project}', [ProjectController::class, 'show'])->name('projects.show');

// Routes pour les devis
Route::get('/devis', [QuoteController::class, 'index'])->name('quote');
Route::post('/devis', [QuoteController::class, 'store'])->name('quote.store');
