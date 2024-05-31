<?php 
use App\Http\Controllers\ActividadesController;
use App\Http\Controllers\GananciasController;
use App\Http\Controllers\GastosController;
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
})->name('registrar_nino');

Route::get('/view/nino', function () {
    return view('nino/view');
})->name('View_Nino');

Route::get('/registra_nino', [NinoController::class, 'store'])->name('nino.store');

Route::delete('/registra_nino/{id_nino}', [NinoController::class , 'destroy'])->name('nino.destroy');
Route::get('/registra_nino/{id_nino}', [NinoController::class , 'show'])->name('nino.show');
Route::patch('/registra_nino/{id_nino}', [NinoController::class , 'update'])->name('nino.update');


// Rutas tutores
Route::get('/registrar/tutor', function () {
    return view('tutores/form'); 
})->name('registrar_tutor');

Route::get('/view/tutores', function () {
    return view('tutores/view');
})->name('View_Tutores');

Route::get('/registra_tutor', [TutoresController::class, 'store'])->name('tutores.store');

Route::delete('/registra_tutor/{id_tutor}', [TutoresController::class , 'destroy'])->name('tutores.destroy');
Route::get('/registra_tutor/{id_tutor}', [TutoresController::class , 'show'])->name('tutores.show');
Route::patch('/registra_tutor/{id_tutor}', [TutoresController::class , 'update'])->name('tutores.update');


//Rutas puestos
Route::get('/registrar/puesto', function () {
    return view('puestos/form'); 
})->name('registrar_puesto');

Route::get('/view/puestos', function () {
    return view('puestos/view');
})->name('View_Puestos');

Route::get('/registra_puesto', [PuestosController::class, 'store'])->name('puestos.store');

Route::delete('/registra_puesto/{id_puesto}', [PuestosController::class , 'destroy'])->name('puestos.destroy');
Route::get('/registra_puesto/{id_puesto}', [PuestosController::class , 'show'])->name('puestos.show');
Route::patch('/registra_puesto/{id_puesto}', [PuestosController::class , 'update'])->name('puestos.update');


//Rutas servicios
Route::get('/registrar/servicio', function () {
    return view('servicios/form'); 
})->name('registrar_servicio');

Route::get('/view/servicios', function () {
    return view('servicios/view');
})->name('View_Servicios');

Route::get('/registra_servicio', [ServiciosController::class, 'store'])->name('servicios.store');

Route::delete('/registra_servicio/{id_servicio}', [ServiciosController::class , 'destroy'])->name('servicios.destroy');
Route::get('/registra_servicio/{id_servicio}', [ServiciosController::class , 'show'])->name('servicios.show');
Route::patch('/registra_servicio/{id_servicio}', [ServiciosController::class , 'update'])->name('servicios.update');


//Rutas actividades
Route::get('/registrar/actividad', function () {
    return view('actividades/form'); 
})->name('registrar_actividad');

Route::get('/view/actividades', function () {
    return view('actividades/view');
})->name('View_Actividades');

Route::get('/registra_actividades', [ActividadesController::class, 'store'])->name('actividades.store');

Route::delete('/registra_actividades/{id_actividad}', [ActividadesController::class , 'destroy'])->name('actividades.destroy');
Route::get('/registra_actividades/{id_actividad}', [ActividadesController::class , 'show'])->name('actividades.show');
Route::patch('/registra_actividades/{id_actividad}', [ActividadesController::class , 'update'])->name('actividades.update');


//Rutas ganancias
Route::get('/registrar/ganancia', function () {
    return view('ganancias/form'); 
})->name('registrar_ganancia');

Route::get('/view/ganancias', function () {
    return view('ganancias/view');
})->name('View_Ganancias');

Route::get('/registra_ganancias', [GananciasController::class, 'store'])->name('ganancias.store');

Route::delete('/registra_ganancias/{id_ganancia}', [GananciasController::class , 'destroy'])->name('ganancias.destroy');
Route::get('/registra_ganancias/{id_ganancia}', [GananciasController::class , 'show'])->name('ganancias.show');
Route::patch('/registra_ganancias/{id_ganancia}', [GananciasController::class , 'update'])->name('ganancias.update');


//Rutas gastos
Route::get('/registrar/gasto', function () {
    return view('gastos/form'); 
})->name('registrar_gasto');

Route::get('/view/gastos', function () {
    return view('gastos/view');
})->name('View_Gastos');

Route::get('/registra_gastos', [GastosController::class, 'store'])->name('gastos.store');

Route::delete('/registra_gastos/{id_gasto}', [GastosController::class , 'destroy'])->name('gastos.destroy');
Route::get('/registra_gastos/{id_gasto}', [GastosController::class , 'show'])->name('gastos.show');
Route::patch('/registra_gastos/{id_gasto}', [GastosController::class , 'update'])->name('gastos.update');

//Rutas empleados
Route::get('/registrar/empleado', function () {
    return view('empleados/form'); 
})->name('registrar_empleado');

Route::get('/view/empleados', function () {
    return view('empleados/view');
})->name('View_Empleados');

Route::get('/registra_empleado', [EmpleadosController::class, 'store'])->name('empleados.store');

Route::delete('/registra_empleado/{id_empleado}', [EmpleadosController::class , 'destroy'])->name('empleados.destroy');
Route::get('/registra_empleado/{id_empleado}', [EmpleadosController::class , 'show'])->name('empleados.show');
Route::patch('/registra_empleado/{id_empleado}', [EmpleadosController::class , 'update'])->name('empleados.update');

require __DIR__.'/auth.php';
