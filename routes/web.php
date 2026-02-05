<?php

use App\Http\Controllers\ChercheurController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\OfferController;
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

//chercheur route
Route::get('chercheur', [ChercheurController::class, 'list'])
    ->name('chercheur');

//recruteur route
Route::get('recruteur', [RecruiterController::class, 'list'])
    ->name('recruteur');
Route::get('/voir/{id}', [RecruiterController::class, 'voir'])->name('voir');

//crud
Route::get('/edit/{id}', [RecruiterController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [RecruiterController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [RecruiterController::class, 'destroy'])->name('delete');
Route::get('filter', [RecruiterController::class, 'filter'])->name('filter');

//offre emploi
Route::view('offre', 'offre-form');
Route::post('enregistrer-offre', [OfferController::class, 'createOffre'])->name('enregistrer-offre');
Route::get('liste-offre', [OfferController::class, 'showOffre'])->name('liste-offre');
Route::get('detail-offre/{id}', [OfferController::class, 'details'])->name('detail-offre');
Route::get('postuler/{user_id}/{offre_id}', [OfferController::class, 'postuler'])->name('postuler');
Route::get('candidature', [RecruiterController::class, 'candidature'])->name('candidature');

//demande d'amis
Route::get('amis/{senderId}/{receiverId}', [FriendController::class, 'demande'])->name('amis');
Route::get('liste-amis/{id}', [FriendController::class, 'list'])->name('liste-amis');
//accepter refuser amis
Route::get('accepter-amis/{id}', [FriendController::class, 'accepter'])->name('accepter-amis');


require __DIR__ . '/auth.php';
