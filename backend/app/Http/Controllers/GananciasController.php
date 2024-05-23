<?php

namespace App\Http\Controllers;

use App\Models\Ganancias;
use Illuminate\Http\Request;

class GananciasController extends Controller
{
    public function show($id_ganancia)
    {
        $ganancia = Ganancias::find($id_ganancia);
        return view('/ganancias/update', ['ganancia' => $ganancia]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'nullable|string',
            'monto' => 'required',
            'fecha' => 'required',
        ]);

        $ganancia = new Ganancias($request->all());
        $ganancia->save();

        return view('/ganancias/view');
    }

    public function update(Request $request, $id_ganancia)
    {
        //Validar el request
        $validatedData = $request->validate([
            'descripcion' => 'nullable|string',
            'monto' => 'required',
            'fecha' => 'required',
        ]);

        //Buscar el registro existente
        $ganancia = Ganancias::find($id_ganancia);
        if ($ganancia) {
            $ganancia->descripcion = $validatedData['descripcion'];
            $ganancia->monto = $validatedData['monto'];
            $ganancia->fecha = $validatedData['fecha'];

            $ganancia->save();

            return view('ganancias/view', ['ganancia' => $ganancia]);
        } else {
            return view('ganancias/view')->with('error', 'Registro no encontrado');
        }
    }

    public function destroy($id_ganancia)
    {
        $ganancia = Ganancias::find($id_ganancia);

        if ($ganancia) {
            $ganancia->delete();
            return view('/ganancias/view')->with('success', 'Todo deleted successfully');
        } else {
            return view('/ganancias/view')->with('error', 'Registro no encontrado');
        }

    }
}
