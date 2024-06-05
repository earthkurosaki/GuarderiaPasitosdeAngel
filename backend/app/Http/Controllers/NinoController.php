<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nino;
use Illuminate\Support\Facades\DB;

class NinoController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        if ($search) {
            $ninos = DB::table('nino')->where('nombre', 'like', '%' . $search . '%')->get();
        } else {
            $ninos = DB::table('nino')->get();
        }

        return view('nino.view', ['ninos' => $ninos]); // Asegúrate de que 'view' es el nombre correcto de tu vista
    }
    
    public function show($id_nino)
    {
        $nino = Nino::find($id_nino);
        return view('nino.update', ['nino' => $nino]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'fecha_nac' => 'required',
            'edad' => 'required|numeric',
            'genero' => 'required',
            'nacionalidad' => 'required|string',
            'modo_nacer' => 'required',
            'cant_hermanos' => 'required|numeric',
            'niv_educativo' => 'required|string',
            'alergia' => 'required',
            'desc_alergia' => 'nullable|string',
            'discapacidad' => 'required',
            'desc_discapacidad' => 'nullable|string',
        ]);

        $nino = new Nino($request->all());
        $nino->save();

        return redirect()->route('View_Nino');
    }

    public function update(Request $request, $id_nino)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'fecha_nac' => 'required',
            'edad' => 'required|numeric',
            'genero' => 'required',
            'nacionalidad' => 'required|string',
            'modo_nacer' => 'required',
            'cant_hermanos' => 'required|numeric',
            'niv_educativo' => 'required|string',
            'alergia' => 'required',
            'desc_alergia' => 'nullable|string',
            'discapacidad' => 'required',
            'desc_discapacidad' => 'nullable|string',
        ]);

        $nino = Nino::find($id_nino);
        if ($nino) {
            $nino->update($validatedData);
            return redirect()->route('View_Nino')->with('success', 'Registro actualizado correctamente');
        } else {
            return redirect()->route('View_Nino')->with('error', 'Registro no encontrado');
        }
    }

    public function destroy($id_nino)
    {
        $nino = Nino::find($id_nino);
        if ($nino) {
            $nino->delete();
            return redirect()->route('View_Nino')->with('success', 'Registro eliminado correctamente');
        } else {
            return redirect()->route('View_Nino')->with('error', 'Registro no encontrado');
        }
    }
}
