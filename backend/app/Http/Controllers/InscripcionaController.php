<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\inscripcionA;
use App\Models\Nino;
use App\Models\Actividades;

class InscripcionaController extends Controller
{
    public function show($id_inscripcion)
    {
        $inscripcion = inscripcionA::find($id_inscripcion);
        $actividades = Actividades::all();
        $ninos = Nino::all(); // Obtener todos los niños
    return view('/inscripcionA/update', compact('inscripcion', 'actividades', 'ninos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_actividad' => 'required',
            'id_nino' => 'required',
        ]);

        $inscripcion = new inscripcionA($request->all());
        $inscripcion->save();

        return redirect()->route('View_InscripcionA');
    }

    public function update(Request $request, $id_inscripcion)
    {
        $validatedData = $request->validate([
            'id_actividad' => 'required',
            'id_nino' => 'required',
        ]);
    
        $inscripcion = inscripcionA::find($id_inscripcion);
        if ($inscripcion) {
            $inscripcion->id_actividad = $validatedData['id_actividad'];
            $inscripcion->id_nino = $validatedData['id_nino'];
            $inscripcion->save();
    
            return redirect()->route('View_InscripcionA')->with('success', 'Inscripción actualizada correctamente');
        } else {
            return redirect()->route('View_InscripcionA')->with('error', 'Registro no encontrado');
        }
    }

    public function destroy($id_inscripcion)
    {
        $inscripcion = inscripcionA::find($id_inscripcion);

        if ($inscripcion) {
            $inscripcion->delete();
            return redirect()->route('View_InscripcionA')->with('success', 'Inscripción eliminada exitosamente');
        } else {
            return redirect()->route('View_InscripcionA')->with('error', 'Registro no encontrado');
        }
    }
}
