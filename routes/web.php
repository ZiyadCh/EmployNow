<?php

use App\Http\Controllers\ChercheurController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecruiterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::view('test', 'test');

//////////////////
//chercheur route
//////////////////
Route::get('chercheur', [ChercheurController::class, 'list'])
    ->name('chercheur');
Route::get('postuler', [ChercheurController::class, 'postuler'])->name('postuler');

//////////////////
//recruteur route
//////////////////
Route::get('recruteur', [RecruiterController::class, 'list'])
    ->name('recruteur');


////////////////////////////////
////////////////////////////////
////////////////////////////////
//crud
Route::get('/postuler/{id}', [RecruiterController::class, 'postuler'])->name('ajouter');
Route::get('/edit/{id}', [RecruiterController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [RecruiterController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [RecruiterController::class, 'destroy'])->name('delete');

require __DIR__ . '/auth.php';
