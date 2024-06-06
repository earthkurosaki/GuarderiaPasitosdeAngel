<?php

namespace App\Http\Controllers;

use App\Models\Gastos;
use Illuminate\Http\Request;

class GastosController extends Controller
{
    public function show($id_gasto)
    {
        $gasto = Gastos::find($id_gasto);
        return view('/gastos/update', ['gasto' => $gasto]);
    }
    public function store(Request $request)
{
    $request->validate([
        'concepto' => 'required|string',
        'monto' => 'required',
        'descripcion' => 'nullable|string',
    ]);

    $gasto = new Gastos();
    $gasto->concepto = $request->input('concepto');
    $gasto->monto = $request->input('monto');
    $gasto->descripcion = $request->input('descripcion');

    $gasto->save();

    return view('gastos.view');
}


    public function update(Request $request, $id_gasto)
    {
        //Validar el request
        $validatedData = $request->validate([
            'concepto' => 'required|string',
            'monto' => 'required',
            'fecha' => 'required',
            'descripcion' => 'nullable|string',
        ]);

        //Buscar el registro existente
        $gasto = Gastos::find($id_gasto);
        if ($gasto) {
            $gasto->concepto = $validatedData['concepto'];
            $gasto->monto = $validatedData['monto'];
            $gasto->fecha = $validatedData['fecha'];
            $gasto->descripcion = $validatedData['descripcion'];

            $gasto->save();

            return view('gastos/view', ['gasto' => $gasto]);
        } else {
            return view('gastos/view')->with('error', 'Registro no encontrado');
        }
    }

    public function destroy($id_gasto)
    {
        $gasto = Gastos::find($id_gasto);

        if ($gasto) {
            $gasto->delete();
            return view('/gastos/view')->with('success', 'Todo deleted successfully');
        } else {
            return view('/gastos/view')->with('error', 'Registro no encontrado');
        }

    }
}
