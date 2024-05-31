<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Empleados;

class EmpleadosController extends Controller
{
    public function show($id_empleado)
    {
        $empleado = Empleados::find($id_empleado);
        return view('/empleados/update', ['empleado' => $empleado]);
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'cedula' => 'required',
            'fechanac' => 'required',
            'genero' => 'required|string',
            'dirreccion' => 'required|string',
            'telefono' => 'required',
            'correo_electronico' => 'required|string',
            'fechaingreso' => 'required',
            'horariolabo' => 'required',
            'foracademica' => 'required|string',
            'teleemergencia' => 'required',
            'id_puesto' => 'required|string',
            'sueldo_base' => 'required',
        ]);

        $empleado = new Empleados($request->all());
        $empleado->save();

        return view('/empleados/view');
    }

    public function update(Request $request, $id_empleado)
    {
        //Validar el request
        $validatedData = $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'cedula' => 'required',
            'fechanac' => 'required',
            'genero' => 'required|string',
            'dirreccion' => 'required|string',
            'telefono' => 'required',
            'correo_electronico' => 'required|string',
            'fechaingreso' => 'required',
            'horariolabo' => 'required',
            'foracademica' => 'required|string',
            'teleemergencia' => 'required',
            'id_puesto' => 'required|string',
            'sueldo_base' => 'required',
        ]);

        //Buscar el registro existente
        $empleado = Empleados::find($id_empleado);
        if ($empleado) {
            $empleado->nombre = $validatedData['nombre'];
            $empleado->apellido = $validatedData['apellido'];
            $empleado->cedula = $validatedData['cedula'];
            $empleado->fechanac = $validatedData['fechanac'];
            $empleado->genero = $validatedData['genero'];
            $empleado->dirreccion = $validatedData['dirreccion'];
            $empleado->telefono = $validatedData['telefono'];
            $empleado->correo_electronico = $validatedData['correo_electronico'];
            $empleado->fechaingreso = $validatedData['fechaingreso'];
            $empleado->horariolabo = $validatedData['horariolabo'];
            $empleado->foracademica = $validatedData['foracademica'];
            $empleado->teleemergencia = $validatedData['teleemergencia'];
            $empleado->id_puesto = $validatedData['id_puesto'];
            $empleado->sueldo_base = $validatedData['sueldo_base'];

            $empleado->save();

            return view('empleados/view', ['empleado' => $empleado]);
        } else {
            return view('empleados/view')->with('error', 'Registro no encontrado');
        }
    }

    public function destroy($id_empleado)
    {
        $empleado = Empleados::find($id_empleado);

        if ($empleado) {
            $empleado->delete();
            return view('/empleados/view')->with('success', 'Todo borrado correctamente');
        } else {
            return view('/empleados/view')->with('error', 'Registro no encontrado');
        }

    }
}
