<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividades;

class ActividadesController extends Controller
{
    public function show($id_actividad)
    {
        $actividad = Actividades::find($id_actividad);
        return view('/actividades/update', ['actividad' => $actividad]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'nullable|string',
            'cupo_maximo' => 'required',
            'edad_minima' => 'nullable',
            'edad_maxima' => 'nullable',
            'costo' => 'nullable',
        ]);

        $actividad = new Actividades($request->all());
        $actividad->save();

        return view('/actividades/view');
    }


    public function update(Request $request, $id_actividad)
    {
        //Validar el request
        $validatedData = $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'nullable|string',
            'cupo_maximo' => 'required',
            'edad_minima' => 'nullable',
            'edad_maxima' => 'nullable',
            'costo' => 'nullable',
        ]);

        //Buscar el registro existente
        $actividad = Actividades::find($id_actividad);
        if ($actividad) {
            $actividad->nombre = $validatedData['nombre'];
            $actividad->descripcion = $validatedData['descripcion'];
            $actividad->cupo_maximo = $validatedData['cupo_maximo'];
            $actividad->edad_minima = $validatedData['edad_minima'];
            $actividad->edad_maxima = $validatedData['edad_maxima'];
            $actividad->costo = $validatedData['costo'];

            $actividad->save();

            return view('/actividades/view', ['actividad' => $actividad]);
        } else {
            return view('/actividades/view')->with('error', 'Registro no encontrado');
        }
    }
    
    public function destroy($id_actividad)
    {
        $actividad = Actividades::find($id_actividad);

        if ($actividad) {
            $actividad->delete();
            return view('/actividades/view')->with('success', 'Todo deleted successfully');
        } else {
            return view('/actividades/view')->with('error', 'Registro no encontrado');
        }

    }
}
