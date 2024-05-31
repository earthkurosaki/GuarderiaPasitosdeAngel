<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagos;

class PagoController extends Controller
{
    public function show($id_pago)
    {
        $pago = Pagos::find($id_pago);
        return view('/pagos/update', ['pago' => $pago]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'id_tutor' => 'required',
            'id_servicio' => 'required',
            'monto' => 'required',
            'metodo_pago' => 'required|string',
            'descripcion' => 'required|string',
            'id_empleados' => 'required',
        ]);

        $pago = new Pagos($request->all());
        $pago->save();

        return view('/pagos/view');
    }

    public function update(Request $request, $id_pago)
    {
        //Validar el request
        $validatedData = $request->validate([
            'id_tutor' => 'required',
            'id_servicio' => 'required',
            'monto' => 'required',
            'metodo_pago' => 'required|string',
            'descripcion' => 'required|string',
            'id_empleados' => 'required',
        ]);

        //Buscar el registro existente
        $pago = Pagos::find($id_pago);
        if ($pago) {
            $pago->id_tutor = $validatedData['id_tutor'];
            $pago->id_servicio = $validatedData['id_servicio'];
            $pago->monto = $validatedData['monto'];
            $pago->metodo_pago = $validatedData['metodo_pago'];
            $pago->descripcion = $validatedData['descripcion'];
            $pago->id_empleados = $validatedData['id_empleados'];
            
            $pago->save();

            return view('pago/view', ['pago' => $pago]);
        } else {
            return view('pago/view')->with('error', 'Registro no encontrado');
        }
    }

    public function destroy($id_pago)
    {
        $pago = Pagos::find($id_pago);

        if ($pago) {
            $pago->delete();
            return view('/pago/view')->with('success', 'Todo deleted successfully');
        } else {
            return view('/pago/view')->with('error', 'Registro no encontrado');
        }

    }

}
