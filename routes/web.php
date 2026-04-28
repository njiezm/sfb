<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Route page d'accueil (le onepage)
Route::get('/', function () {
    return view('welcome'); // ou le nom de votre vue blade
})->name('home');

// Route soumission formulaire
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/mentions-legales', function () {
    return view('mentions-legales');
})->name('mentions-legales');

Route::get('/politique-confidentialite', function () {
    return view('politique-confidentialite');
})->name('politique-confidentialite');
