

<?php 
use App\Http\Controllers\NinoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TutoresController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\PagoController;
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

// Rutas niños
Route::get('/registrar/nino', function () {
    return view('nino/form');
})->name('nino.registrar');

Route::get('/view/nino', function () {
    return view('nino/view');
})->name('nino.view');

Route::post('/registra/nino', [NinoController::class, 'store'])->name('nino.store');

Route::delete('/registra/nino/{id_nino}', [NinoController::class , 'destroy'])->name('nino.destroy');
Route::get('/registra/nino/{id_nino}', [NinoController::class , 'show'])->name('nino.show');
Route::patch('/registra/nino/{id_nino}', [NinoController::class , 'update'])->name('nino.update');

// Rutas tutores
Route::get('/registrar/tutor', function () {
    return view('tutores/form'); 
})->name('tutor.registrar');

Route::get('/view/tutores', function () {
    return view('tutores/view');
})->name('tutor.view');

Route::post('/registra/tutor', [TutoresController::class, 'store'])->name('tutores.store');

Route::delete('/registra/tutor/{id_tutor}', [TutoresController::class , 'destroy'])->name('tutores.destroy');
Route::get('/registra/tutor/{id_tutor}', [TutoresController::class , 'show'])->name('tutores.show');
Route::patch('/registra/tutor/{id_tutor}', [TutoresController::class , 'update'])->name('tutores.update');

// Rutas empleados
Route::get('/registrar/empleado', function () {
    return view('empleados/form'); 
})->name('empleado_reg');

Route::get('/view/empleados', function () {
    return view('empleados/view');
})->name('empleado.view');

Route::post('/registra/empleado', [EmpleadosController::class, 'store'])->name('empleados.store');

Route::delete('/registra/empleado/{id_empleados}', [EmpleadosController::class , 'destroy'])->name('empleados.destroy');
Route::get('/registra/empleado/{id_empleados}', [EmpleadosController::class , 'show'])->name('empleados.show');
Route::patch('/registra/empleado/{id_empleados}', [EmpleadosController::class , 'update'])->name('empleados.update');

// Rutas pagos
Route::get('/registrar/pago', function () {
    return view('pagos/form'); 
})->name('pago_reg');

Route::get('/view/pagos', function () {
    return view('pagos/view');
})->name('pago.view');

Route::post('/registra/pago', [PagoController::class, 'store'])->name('pagos.store');

Route::delete('/registra/pago/{id_pago}', [PagoController::class , 'destroy'])->name('pagos.destroy');
Route::get('/registra/pago/{id_pago}', [PagoController::class , 'show'])->name('pagos.show');
Route::patch('/registra/pago/{id_pago}', [PagoController::class , 'update'])->name('pagos.update');

require __DIR__.'/auth.php';
