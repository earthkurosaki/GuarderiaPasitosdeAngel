<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleados;
use Illuminate\Support\Facades\DB;

class EmpleadosController extends Controller
{
    public function index2(Request $request)
{
    $search = $request->input('search');
    if ($search) {
        $empleados = DB::table('empl_v')->where('nombre', 'like', '%' . $search . '%')->get();
    } else {
        $empleados = DB::table('empl_v')->get();
    }
    return view('empleados.view', [
        'empleados' => $empleados // Pasar la variable de búsqueda a la vista
    ]);
}

    public function index()
    {
        $empleados = Empleados::all();
        return view('empleados.view', compact('empleados'));
    }

    public function show($id_empleados)
    {
        $empleado = Empleados::find($id_empleados);
        return view('empleados.update', ['empleado' => $empleado]);
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
            'horariolabo' => 'required',
            'foracademica' => 'required|string',
            'teleemergencia' => 'nullable',
            'id_puesto' => 'required',
            'sueldo_base' => 'required',
        ]);

        $empleado = new Empleados($request->all());
        $empleado->save();

        return view('empleados.view');
    }

    public function update(Request $request, $id_empleados)
{
    $validatedData = $request->validate([
        'nombre' => 'required|string',
        'apellido' => 'required|string',
        'cedula' => 'required',
        'fechanac' => 'required',
        'genero' => 'required|string',
        'direccion' => 'required|string', // Asegúrate que 'direccion' sea el nombre correcto
        'telefono' => 'required',
        'correo_electronico' => 'required|string',
        'fechaingreso' => 'nullable',
        'horariolabo' => 'required',
        'foracademica' => 'required|string',
        'teleemergencia' => 'nullable',
        'id_puesto' => 'required',
        'sueldo_base' => 'required',
    ]);

    $empleado = Empleados::find($id_empleados);
    if ($empleado) {
        $empleado->update($validatedData);
        return redirect()->route('View_Empleados')->with('success', 'Empleado actualizado exitosamente');
    } else {
        return redirect()->route('View_Empleados')->with('error', 'Empleado no encontrado');
    }
}

    public function destroy($id_empleados)
    {
        $empleado = Empleados::find($id_empleados);

        if ($empleado) {
            $empleado->delete();
            return redirect()->route('View_Empleado')->with('success', 'Empleado eliminado exitosamente');
        } else {
            return redirect()->route('View_Empleado')->with('error', 'Empleado no encontrado');
        }
    }
}
