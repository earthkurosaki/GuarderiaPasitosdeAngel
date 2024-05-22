<?php

use App\Http\Controllers\NinoController;
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

//Rutas niños
Route::get('/registrar', function () {
    return view('nino/form');
})->name('Registrar');

Route::get('/view', function () {
    return view('nino/view');
});

Route::get('/registra', [NinoController::class, 'store'])->name('nino.store');

Route::delete('/registra/{id_nino}', [NinoController::class , 'destroy'])->name('nino.destroy');
Route::get('/registra/{id_nino}', [NinoController::class , 'show'])->name('nino.show');
Route::patch('/registra/{id_nino}', [NinoController::class , 'update'])->name('nino.update');

require __DIR__.'/auth.php';
