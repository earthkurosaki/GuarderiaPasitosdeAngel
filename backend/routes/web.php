<?php

use App\Http\Controllers\NinoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TutoresController;
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

Route::get('/view/nino', function () {
    return view('nino/view');
})->name('View');

Route::get('/registra', [NinoController::class, 'store'])->name('nino.store');

Route::delete('/registra/{id_nino}', [NinoController::class , 'destroy'])->name('nino.destroy');
Route::get('/registra/{id_nino}', [NinoController::class , 'show'])->name('nino.show');
Route::patch('/registra/{id_nino}', [NinoController::class , 'update'])->name('nino.update');


//Rutas tutores
Route::get('/registrar', function () {
    //Se va a llamar el nombredelacarpeta/nombredelarchivo
    return view('tutores/form'); 
})->name('Registrar');

Route::get('/view/tutores', function () {
    return view('tutores/view');
})->name('View');

Route::get('/registra', [TutoresController::class, 'store'])->name('tutores.store');

Route::delete('/registra/{id_tutor}', [TutoresController::class , 'destroy'])->name('tutores.destroy');
Route::get('/registra/{id_tutor}', [TutoresController::class , 'show'])->name('tutores.show');
Route::patch('/registra/{id_tutor}', [TutoresController::class , 'update'])->name('tutores.update');

require __DIR__.'/auth.php';
