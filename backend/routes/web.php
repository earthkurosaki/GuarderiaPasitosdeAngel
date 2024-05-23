<?php

use App\Http\Controllers\NinoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PuestosController;
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

Route::get('/registra_nino', [NinoController::class, 'store'])->name('nino.store');

Route::delete('/registra_nino/{id_nino}', [NinoController::class , 'destroy'])->name('nino.destroy');
Route::get('/registra_nino/{id_nino}', [NinoController::class , 'show'])->name('nino.show');
Route::patch('/registra_nino/{id_nino}', [NinoController::class , 'update'])->name('nino.update');


//Rutas tutores
Route::get('/registrar', function () {
    //Se va a llamar el nombredelacarpeta/nombredelarchivo
    return view('tutores/form'); 
})->name('Registrar');

Route::get('/view/tutores', function () {
    return view('tutores/view');
})->name('View');

Route::get('/registra_tutor', [TutoresController::class, 'store'])->name('tutores.store');

Route::delete('/registra_tutor/{id_tutor}', [TutoresController::class , 'destroy'])->name('tutores.destroy');
Route::get('/registra_tutor/{id_tutor}', [TutoresController::class , 'show'])->name('tutores.show');
Route::patch('/registra_tutor/{id_tutor}', [TutoresController::class , 'update'])->name('tutores.update');


//Rutas puestos
Route::get('/registrar', function () {
    return view('puestos/form'); 
})->name('Registrar');

Route::get('/view/puestos', function () {
    return view('puestos/view');
})->name('View');

Route::get('/registra_puesto', [PuestosController::class, 'store'])->name('puestos.store');

Route::delete('/registra_puesto/{id_puesto}', [PuestosController::class , 'destroy'])->name('puestos.destroy');
Route::get('/registra_puesto/{id_puesto}', [PuestosController::class , 'show'])->name('puestos.show');
Route::patch('/registra_puesto/{id_puesto}', [PuestosController::class , 'update'])->name('puestos.update');

require __DIR__.'/auth.php';
