<?php

use App\Http\Controllers\ProfileController;
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

//chercheur route
Route::get('/chercheur', function () {
    return view('chercheur');
})->name('chercheur');
//recruteur route
Route::get('/recruteur', function () {
    return view('recruteur');
})->name('recruteur');

Route::get('/chercheur', function () {
    return view('chercheur');
})->name('chercheur');

require __DIR__ . '/auth.php';
