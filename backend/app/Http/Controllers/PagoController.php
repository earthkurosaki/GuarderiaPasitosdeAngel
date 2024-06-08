<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagos;
use PDF;

class PagoController extends Controller
{
    public function show($id_pago)
    {
        $pago = Pagos::find($id_pago);
        return view('/pagos/update', ['pagos' => $pago]);
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
        'id_nino' => 'required',
    ]);
    

    $pago = new Pagos($request->all());
    $pago->save();

    return view('/pagos/view');
}

}