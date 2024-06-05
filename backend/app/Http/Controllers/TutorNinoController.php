<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TutorNino;
use App\Models\Nino;
use App\Models\Tutores;

class TutorNinoController extends Controller
{
    public function search(Request $request)
    {
        // Obtener el término de búsqueda
        $search = $request->get('search');

        // Buscar niños por nombre o apellido
        $ninos = Nino::where('nombre', 'LIKE', "%$search%")
                     ->orWhere('apellido', 'LIKE', "%$search%")
                     ->get();

        // Obtener tutores asociados a los niños encontrados
        $tutores = collect();
        foreach ($ninos as $nino) {
            $tutorNino = TutorNino::where('id_nino', $nino->id_nino)->first();
            if ($tutorNino) {
                $tutor = Tutores::find($tutorNino->id_tutor);
                if ($tutor) {
                    $tutores->push($tutor);
                }
            }
        }

        return view('nino.view', compact('ninos', 'tutores', 'search'));
    }
}
