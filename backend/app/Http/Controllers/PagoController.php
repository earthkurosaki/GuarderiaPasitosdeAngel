<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagos;
use App\Models\Tutor;
use App\Models\Empleado;

class PagoController extends Controller
{
    public function show($id_pago)
    {
        $pago = Pagos::find($id_pago);
        $tutores = Tutor::all();
        $empleados = Empleado::all(); // Obtener todos los empleados
        return view('/pagos/update', compact('pago', 'tutores', 'empleados'));
    }
    public function store(Request $request)
{

    $request->validate([
        'id_tutor' => 'required',
        'id_servicio' => 'nullable',
        'monto' => 'required',
        'metodo_pago' => 'required|string',
        'descripcion' => 'nullable|string',
        'id_empleados' => 'required',
        'fecha' => 'nullable',
        'facturado' => 'nullable',
        'monto_neto' => 'nullable',
        'actividad_adicional' => 'nullable',
    ]);
    

    try {
        $pago = new Pagos($request->all());
        $pago->save();
    } catch (\Exception $e) {
        // Manejar el error, por ejemplo, devolver un mensaje de error o redirigir con un mensaje de error
        return redirect()->back()->with('error', 'Hubo un problema al guardar el pago: ' . $e->getMessage());
    }
    
}}