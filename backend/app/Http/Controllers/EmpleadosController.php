<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Empleados;

class EmpleadosController extends Controller
{
    public function show($id_empleados)
    {
        $empleado = Empleados::find($id_empleados);
        return view('/empleado/update', ['empleado' => $empleado]);
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'cedula' => 'required',
            'fechanac' => 'required',
            'genero' => 'required|string',
            'direccion' => 'required|string',
            'telefono' => 'required',
            'correo_electronico' => 'required|string',
            'fechaingreso' => 'required',
            'horariolabo' => 'required',
            'foracademica' => 'required|string',
            'teleemergencia' => 'required',
            'id_puesto' => 'required|string',
        ]);

        $empleado = new Empleados($request->all());
        $empleado->save();

        return view('/empleado/view');
    }

    public function update(Request $request, $id_empleados)
    {
        //Validar el request
        $validatedData = $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'cedula' => 'required',
            'fechanac' => 'required',
            'genero' => 'required|string',
            'direccion' => 'required|string',
            'telefono' => 'required',
            'correo_electronico' => 'required|string',
            'fechaingreso' => 'required',
            'horariolabo' => 'required',
            'foracademica' => 'required|string',
            'teleemergencia' => 'required',
            'id_puesto' => 'required|string',
        ]);

        //Buscar el registro existente
        $empleado = Empleados::find($id_empleados);
        if ($empleado) {
            $empleado->nombre = $validatedData['nombre'];
            $empleado->apellido = $validatedData['apellido'];
            $empleado->cedula = $validatedData['cedula'];
            $empleado->fechanac = $validatedData['fechanac'];
            $empleado->genero = $validatedData['genero'];
            $empleado->direccion = $validatedData['direccion'];
            $empleado->telefono = $validatedData['telefono'];
            $empleado->correo_electronico = $validatedData['correo_electronico'];
            $empleado->fechaingreso = $validatedData['fechaingreso'];
            $empleado->horariolabo = $validatedData['horariolabo'];
            $empleado->foracademica = $validatedData['foracademica'];
            $empleado->teleemergencia = $validatedData['teleemergencia'];
            $empleado->id_puesto = $validatedData['id_puesto'];

            $empleado->save();

            return view('empleado/view', ['empleado' => $empleado]);
        } else {
            return view('empleado/view')->with('error', 'Registro no encontrado');
        }
    }

    public function destroy($id_empleados)
    {
        $empleado = Empleados::find($id_empleados);

        if ($empleado) {
            $empleado->delete();
            return view('/empleado/view')->with('success', 'Todo borrado correctamente');
        } else {
            return view('/empleado/view')->with('error', 'Registro no encontrado');
        }

    }
}
