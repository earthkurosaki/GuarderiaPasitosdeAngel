<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicios;

class ServiciosController extends Controller
{
    public function show($id_servicio)
    {
        $servicio = Servicios::find($id_servicio);
        return view('/servicios/update', ['servicio' => $servicio]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'costo' => 'required',
            'detalle' => 'nullable|string',
        ]);

        $servicio = new Servicios($request->all());
        $servicio->save();

        return view('/servicios/view');
    }

    public function update(Request $request, $id_servicio)
    {
        //Validar el request
        $validatedData = $request->validate([
            'nombre' => 'required|string',
            'costo' => 'required',
            'detalle' => 'nullable|string',
        ]);

        //Buscar el registro existente
        $servicio = Servicios::find($id_servicio);
        if ($servicio) {
            $servicio->nombre = $validatedData['nombre'];
            $servicio->costo = $validatedData['costo'];
            $servicio->detalle = $validatedData['detalle'];

            $servicio->save();

            return view('servicios/view', ['servicio' => $servicio]);
        } else {
            return view('servicios/view')->with('error', 'Registro no encontrado');
        }
    }

    public function destroy($id_servicio)
    {
        $servicio = Servicios::find($id_servicio);

        if ($servicio) {
            $servicio->delete();
            return view('/servicios/view')->with('success', 'Todo deleted successfully');
        } else {
            return view('/servicios/view')->with('error', 'Registro no encontrado');
        }

    }
}
