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
use App\Http\Controllers\vistaNominaController;
use App\Http\Controllers\NominaController;
use App\Http\Controllers\GananciasVController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\Empleados_VController;
use App\Http\Controllers\InscripcionaController;
use App\Http\Controllers\InscripcioncController;
use App\Http\Controllers\IngresosVController;
use App\Models\empleados_v;
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

//Buscador de ninos
Route::get('/view/nino', [NinoController::class, 'index2'])->name('NinoD');
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

// Rutas de las nominas
Route::get('/registrar/nomina', function () {
    return view('nominas/form'); 
})->name('registrar_nomina');

Route::get('/view/nominas', function () {
    return view('nominas/view');
})->name('View_Nominas');

Route::get('/registra_nomina', [NominaController::class, 'store'])->name('nomina.store');
// Ruta para mostrar la vista de nóminas
Route::get('/nomina_empleado/index', [vistaNominaController::class, 'index'])->name('nominas_view');
Route::get('/nomina_empleado/index', [EmpleadosController::class, 'indexx'])->name('nominas_view2');

// Ruta para pagar las nóminas
Route::patch('/nominas/view', [NominaController::class, 'pagarNomina'])->name('nomina_pagar');
Route::delete('/registra_nomina/{cod_nomina}', [NominaController::class , 'destroy'])->name('nomina.destroy');
Route::get('/registra_nomina/{cod_nomina}', [NominaController::class , 'show'])->name('nomina.show');
Route::patch('/registra_nomina/{cod_nomina}', [NominaController::class , 'update'])->name('nomina.update');


//ruta para boton de empleados
Route::patch('/empleados/view', [EmpleadosController::class, 'activarNomina'])->name('activa_nomina');

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
// Route::get('/registrar/ganancia', function () {
//     return view('ganancias/form'); 
// })->name('registrar_ganancia');

// Route::get('/view/ganancias', function () {
//     return view('ganancias/view');
// })->name('View_Ganancias');

// Route::get('/registra_ganancias', [GananciasController::class, 'store'])->name('ganancias.store');

// Route::delete('/registra_ganancias/{id_ganancia}', [GananciasController::class , 'destroy'])->name('ganancias.destroy');
// Route::get('/registra_ganancias/{id_ganancia}', [GananciasController::class , 'show'])->name('ganancias.show');
// Route::patch('/registra_ganancias/{id_ganancia}', [GananciasController::class , 'update'])->name('ganancias.update');


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
    return view('/empleados/form'); 
})->name('registrar_empleado');

Route::get('/view/empleados', function () {
    return view('empleados.view');
})->name('View_Empleados');

Route::get('/view/empleados', [Empleados_VController::class, 'index2'])->name('View_EmpleadosD');


Route::post('/registrar/empleado', [EmpleadosController::class, 'store'])->name('empleados.store');

Route::delete('/registrar/empleado/{id_empleados}', [EmpleadosController::class, 'destroy'])->name('empleados.destroy');
Route::get('/registrar/empleado/{id_empleados}', [EmpleadosController::class, 'show'])->name('empleados.show');
Route::patch('/registrar/empleado/{id_empleados}', [EmpleadosController::class, 'update'])->name('empleados.update');

//Rutas pago
Route::get('/registrar/pagos', function () {
    return view('pagos/form'); 
})->name('registrar_pago');

Route::get('/view/pagos', function () {
    return view('pagos/view');
})->name('View_Pagos');

Route::get('/registrar_pago', [PagoController::class, 'store'])->name('pagos.store');


Route::delete('/registrar_pago/{id_pago}', [PagoController::class , 'destroy'])->name('pagos.destroy');
Route::get('/registrar_pago/{id_pago}', [PagoController::class , 'show'])->name('pagos.show');
Route::patch('/registrar_pago/{id_pago}', [PagoController::class , 'update'])->name('pagos.update');

//Rutas cursos
Route::get('/registrar/cursos', function () {
    return view('cursos/form'); 
})->name('registrar_curso');

Route::get('/view/cursos', function () {
    return view('cursos/view');
})->name('View_Cursos');

Route::get('/registra_curso', [CursoController::class, 'store'])->name('cursos.store');

Route::delete('/registra_curso/{id_curso}', [CursoController::class , 'destroy'])->name('cursos.destroy');
Route::get('/registra_curso/{id_curso}', [CursoController::class , 'show'])->name('cursos.show');
Route::patch('/registra_curso/{id_curso}', [CursoController::class , 'update'])->name('curso.update');

//Rutas inscripcion a las actividades
Route::get('/registrar/inscripcionA', function () {
    return view('InscripcionA/form'); 
})->name('registrar_inscripcion');

Route::get('/view/inscripcion', function () {
    return view('inscripciona/view');
})->name('View_InscripcionA');

Route::get('/registra_inscripcion', [InscripcionaController::class, 'store'])->name('inscripcion.store');

Route::delete('/registra_inscripcion/{id_inscripcion}', [InscripcionaController::class , 'destroy'])->name('inscripciona.destroy');
Route::get('/registra_inscripcion/{id_inscripcion}', [InscripcionaController::class , 'show'])->name('inscripciona.show');
Route::patch('/registra_inscripcion/{id_inscripcion}', [InscripcionaController::class , 'update'])->name('inscripciona.update');

//Rutas inscripcion a lOS CURSOS
Route::get('/registrar/inscripcionC', function () {
    return view('InscripcionC/form'); 
})->name('registrar_inscripcionc');

Route::get('/view/inscripcionc', function () {
    return view('inscripcionc/view');
})->name('View_InscripcionC');

Route::get('/registra_inscripcionc', [InscripcioncController::class, 'store'])->name('inscripcionc.store');

Route::delete('/registra_inscripcionc/{id_inscripcion}', [InscripcioncController::class , 'destroy'])->name('inscripcionc.destroy');
Route::get('/registra_inscripcionc/{id_inscripcion}', [InscripcioncController::class , 'show'])->name('inscripcionc.show');
Route::patch('/registra_inscripcionc/{id_inscripcion}', [InscripcioncController::class , 'update'])->name('inscripcionc.update');

// Ruta de la vista de las nóminas
Route::get('/nomina_empleado', [vistaNominaController::class, 'index'])->name('View_NominaDet');

// Ruta de la vista de las ganancias
Route::get('/ganancias_guarderia', [GananciasVController::class, 'index'])->name('View_GananciasDet');

// Ruta de la vista de los ingresos
Route::get('/ingresos_guarderia', [IngresosVController::class, 'index'])->name('View_IngresosDet');






require __DIR__.'/auth.php';