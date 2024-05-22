<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutores;

class TutoresController extends Controller
{
    public function show($id_tutor)
    {
        $tutor = Tutores::find($id_tutor);
        return view('/tutores/update', ['tutor' => $tutor]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'fechanac' => 'required',
            'cedula' => 'required',
            'lugar_trabajo' => 'required|string',
            'cargo' => 'required|string',
            'nivel_academico' => 'required|string',
            'profesion' => 'nullable|string',
            'direccion' => 'required|string',
            'telefono' => 'required',
            'email' => 'required',
            'estado_civil' => 'required|string',
        ]);

        $tutor = new Tutores($request->all());
        $tutor->save();

        return view('/tutores/view');
    }

    public function update(Request $request, $id_nino)
    {
        //Validar el request
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

        //Buscar el registro existente
        $nino = Tutores::find($id_nino);
        if ($nino) {
            $nino->nombre = $validatedData['nombre'];
            $nino->apellido = $validatedData['apellido'];
            $nino->fecha_nac = $validatedData['fecha_nac'];
            $nino->edad = $validatedData['edad'];
            $nino->genero = $validatedData['genero'];
            $nino->nacionalidad = $validatedData['nacionalidad'];
            $nino->modo_nacer = $validatedData['modo_nacer'];
            $nino->cant_hermanos = $validatedData['cant_hermanos'];
            $nino->niv_educativo = $validatedData['niv_educativo'];
            $nino->alergia = $validatedData['alergia'];
            $nino->desc_alergia = $validatedData['desc_alergia'];
            $nino->discapacidad = $validatedData['discapacidad'];
            $nino->desc_discapacidad = $validatedData['desc_discapacidad'];

            $nino->save();

            return view('nino/view', ['nino' => $nino]);
        } else {
            return view('nino/view')->with('error', 'Registro no encontrado');
        }
    }

    public function destroy($id_nino)
    {
        $nino = Nino::find($id_nino);

        if ($nino) {
            $nino->delete();
            return view('/nino/view')->with('success', 'Todo deleted successfully');
        } else {
            return view('/nino/view')->with('error', 'Registro no encontrado');
        }

    }

}
