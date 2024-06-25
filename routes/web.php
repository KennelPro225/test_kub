<?php

use App\Http\Controllers\CandidatureController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix' => 'offres'], function () {
    Route::get('{id}/liste-canditature', [OffreController::class, 'index'])->name('offres.index');
    Route::get('/create', [OffreController::class, 'create'])->name('offres.create');
    Route::post('/', [OffreController::class, 'store'])->name('offres.store');
    Route::get('/{id}', [OffreController::class, 'show'])->name('offres.show');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix' => 'candidat'], function () {
    // Route::get('{id}/liste-canditature', [OffreController::class, 'index'])->name('offres.index');
    Route::get('{id}/postuler', [CandidatureController::class, 'create'])->name('postule.create');
    // Route::post('/', [OffreController::class, 'store'])->name('offres.store');
    // Route::get('/{id}', [OffreController::class, 'show'])->name('offres.show');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
