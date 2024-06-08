<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\inscripcionC;
use App\Models\Nino;
use App\Models\Cursos;

class InscripcioncController extends Controller
{
    public function show($id_inscripcion)
    {
        $inscripcionc = inscripcionc::find($id_inscripcion);
        $cursos = Cursos::all();
        $ninos = Nino::all(); // Obtener todos los niños
    return view('/inscripcionc/update', compact('inscripcionc', 'cursos', 'ninos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_curso' => 'required',
            'id_nino' => 'required',
        ]);

        $inscripcionc = new inscripcionc($request->all());
        $inscripcionc->save();

        return redirect()->route('View_InscripcionC');
    }

    public function update(Request $request, $id_inscripcion)
    {
        $validatedData = $request->validate([
            'id_curso' => 'required',
            'id_nino' => 'required',
        ]);
    
        $inscripcionc = inscripcionC::find($id_inscripcion);
        if ($inscripcionc) {
            $inscripcionc->id_curso= $validatedData['id_curso'];
            $inscripcionc->id_nino = $validatedData['id_nino'];
            $inscripcionc->save();
    
            return redirect()->route('View_InscripcionC')->with('success', 'Inscripción actualizada correctamente');
        } else {
            return redirect()->route('View_InscripcionC')->with('error', 'Registro no encontrado');
        }
    }

    public function destroy($id_inscripcion)
    {
        $inscripcionc = inscripcionc::find($id_inscripcion);

        if ($inscripcionc) {
            $inscripcionc->delete();
            return redirect()->route('View_InscripcionC')->with('success', 'Inscripción eliminada exitosamente');
        } else {
            return redirect()->route('View_InscripcionC')->with('error', 'Registro no encontrado');
        }
    }
}
