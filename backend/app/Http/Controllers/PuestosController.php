<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Puestos;

class PuestosController extends Controller
{    public function show($id_puesto)
    {
        $puesto = Puestos::find($id_puesto);
        return view('/puestos/update', ['puesto' => $puesto]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'puesto' => 'required|string',
            'descpuesto' => 'required',
        ]);

        $puesto = new Puestos($request->all());
        $puesto->save();

        return view('/puestos/view');
    }

    public function update(Request $request, $id_puesto)
    {
        //Validar el request
        $validatedData = $request->validate([
            'puesto' => 'required|string',
            'descpuesto' => 'required',
        ]);

        //Buscar el registro existente
        $puesto = Puestos::find($id_puesto);
        if ($puesto) {
            $puesto->puesto = $validatedData['puesto'];
            $puesto->descpuesto = $validatedData['descpuesto'];

            $puesto->save();

            return view('puestos/view', ['puesto' => $puesto]);
        } else {
            return view('puestos/view')->with('error', 'Registro no encontrado');
        }
    }

    public function destroy($id_puesto)
    {
        $puesto = Puestos::find($id_puesto);

        if ($puesto) {
            $puesto->delete();
            return view('/puestos/view')->with('success', 'Todo deleted successfully');
        } else {
            return view('/puestos/view')->with('error', 'Registro no encontrado');
        }

    }
}
