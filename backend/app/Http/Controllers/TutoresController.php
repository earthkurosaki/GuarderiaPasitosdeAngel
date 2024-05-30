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

    public function update(Request $request, $id_tutor)
    {
        //Validar el request
        $validatedData = $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
<<<<<<< HEAD
            'fecha_nac' => 'required',
            'cedula' => 'required|numeric',
            'lugar_trabajo' => 'required',
            'cargo' => 'required|string',
            'nivel_academico' => 'required',
            'profesion' => 'required|string',
            'direccion' => 'required|string',
            'telefono' => 'required|numeric',
            'email' => 'nullable|string',
=======
            'fechanac' => 'required',
            'cedula' => 'required',
            'lugar_trabajo' => 'required|string',
            'cargo' => 'required|string',
            'nivel_academico' => 'required|string',
            'profesion' => 'nullable|string',
            'direccion' => 'required|string',
            'telefono' => 'required',
            'email' => 'required',
>>>>>>> 1c5e799001d1e594f9d5b07bb23aa93088ff6645
            'estado_civil' => 'required|string',
        ]);

        //Buscar el registro existente
        $tutor = Tutores::find($id_tutor);
        if ($tutor) {
            $tutor->nombre = $validatedData['nombre'];
            $tutor->apellido = $validatedData['apellido'];
<<<<<<< HEAD
            $tutor->fecha_nac = $validatedData['fecha_nac'];
=======
            $tutor->fechanac = $validatedData['fechanac'];
>>>>>>> 1c5e799001d1e594f9d5b07bb23aa93088ff6645
            $tutor->cedula = $validatedData['cedula'];
            $tutor->lugar_trabajo = $validatedData['lugar_trabajo'];
            $tutor->cargo = $validatedData['cargo'];
            $tutor->nivel_academico = $validatedData['nivel_academico'];
            $tutor->profesion = $validatedData['profesion'];
            $tutor->direccion = $validatedData['direccion'];
            $tutor->telefono = $validatedData['telefono'];
            $tutor->email = $validatedData['email'];
            $tutor->estado_civil = $validatedData['estado_civil'];

            $tutor->save();

<<<<<<< HEAD
            return view('tutor/view', ['tutor' => $tutor]);
        } else {
            return view('tutor/view')->with('error', 'Registro no encontrado');
=======
            return view('tutores/view', ['tutor' => $tutor]);
        } else {
            return view('tutores/view')->with('error', 'Registro no encontrado');
>>>>>>> 1c5e799001d1e594f9d5b07bb23aa93088ff6645
        }
    }

    public function destroy($id_tutor)
    {
        $tutor = Tutores::find($id_tutor);

        if ($tutor) {
            $tutor->delete();
<<<<<<< HEAD
            return view('/tutor/view')->with('success', 'Todo deleted successfully');
        } else {
            return view('/tutor/view')->with('error', 'Registro no encontrado');
=======
            return view('/tutores/view')->with('success', 'Todo deleted successfully');
        } else {
            return view('/tutores/view')->with('error', 'Registro no encontrado');
>>>>>>> 1c5e799001d1e594f9d5b07bb23aa93088ff6645
        }

    }

}
