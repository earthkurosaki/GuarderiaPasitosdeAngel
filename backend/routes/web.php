
<<<<<<< HEAD

<?php 
=======
use App\Http\Controllers\ActividadesController;
use App\Http\Controllers\GananciasController;
use App\Http\Controllers\GastosController;
>>>>>>> 1c5e799001d1e594f9d5b07bb23aa93088ff6645
use App\Http\Controllers\NinoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PuestosController;
use App\Http\Controllers\ServiciosController;
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

<<<<<<< HEAD
Route::post('/registra/nino', [NinoController::class, 'store'])->name('nino.store');

Route::delete('/registra/nino/{id_nino}', [NinoController::class , 'destroy'])->name('nino.destroy');
Route::get('/registra/nino/{id_nino}', [NinoController::class , 'show'])->name('nino.show');
Route::patch('/registra/nino/{id_nino}', [NinoController::class , 'update'])->name('nino.update');
=======
Route::get('/registra_nino', [NinoController::class, 'store'])->name('nino.store');

Route::delete('/registra_nino/{id_nino}', [NinoController::class , 'destroy'])->name('nino.destroy');
Route::get('/registra_nino/{id_nino}', [NinoController::class , 'show'])->name('nino.show');
Route::patch('/registra_nino/{id_nino}', [NinoController::class , 'update'])->name('nino.update');
>>>>>>> 1c5e799001d1e594f9d5b07bb23aa93088ff6645

// Rutas tutores
Route::get('/registrar/tutor', function () {
    return view('tutores/form'); 
})->name('tutor.registrar');

Route::get('/view/tutores', function () {
    return view('tutores/view');
})->name('tutor.view');

<<<<<<< HEAD
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
=======
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


//Rutas servicios
Route::get('/registrar', function () {
    return view('servicios/form'); 
})->name('Registrar');

Route::get('/view/servicios', function () {
    return view('servicios/view');
})->name('View');

Route::get('/registra_servicio', [ServiciosController::class, 'store'])->name('servicios.store');

Route::delete('/registra_servicio/{id_servicio}', [ServiciosController::class , 'destroy'])->name('servicios.destroy');
Route::get('/registra_servicio/{id_servicio}', [ServiciosController::class , 'show'])->name('servicios.show');
Route::patch('/registra_servicio/{id_servicio}', [ServiciosController::class , 'update'])->name('servicios.update');


//Rutas actividades
Route::get('/registrar', function () {
    return view('actividades/form'); 
})->name('Registrar');

Route::get('/view/actividades', function () {
    return view('actividades/view');
})->name('View');

Route::get('/registra_actividades', [ActividadesController::class, 'store'])->name('actividades.store');

Route::delete('/registra_actividades/{id_actividad}', [ActividadesController::class , 'destroy'])->name('actividades.destroy');
Route::get('/registra_actividades/{id_actividad}', [ActividadesController::class , 'show'])->name('actividades.show');
Route::patch('/registra_actividades/{id_actividad}', [ActividadesController::class , 'update'])->name('actividades.update');


//Rutas ganancias
Route::get('/registrar', function () {
    return view('ganancias/form'); 
})->name('Registrar');

Route::get('/view/ganancias', function () {
    return view('ganancias/view');
})->name('View');

Route::get('/registra_ganancias', [GananciasController::class, 'store'])->name('ganancias.store');

Route::delete('/registra_ganancias/{id_ganancia}', [GananciasController::class , 'destroy'])->name('ganancias.destroy');
Route::get('/registra_ganancias/{id_ganancia}', [GananciasController::class , 'show'])->name('ganancias.show');
Route::patch('/registra_ganancias/{id_ganancia}', [GananciasController::class , 'update'])->name('ganancias.update');


//Rutas gastos
Route::get('/registrar', function () {
    return view('gastos/form'); 
})->name('Registrar');

Route::get('/view/gastos', function () {
    return view('gastos/view');
})->name('View');

Route::get('/registra_gastos', [GastosController::class, 'store'])->name('gastos.store');

Route::delete('/registra_gastos/{id_gasto}', [GastosController::class , 'destroy'])->name('gastos.destroy');
Route::get('/registra_gastos/{id_gasto}', [GastosController::class , 'show'])->name('gastos.show');
Route::patch('/registra_gastos/{id_gasto}', [GastosController::class , 'update'])->name('gastos.update');
>>>>>>> 1c5e799001d1e594f9d5b07bb23aa93088ff6645

require __DIR__.'/auth.php';
