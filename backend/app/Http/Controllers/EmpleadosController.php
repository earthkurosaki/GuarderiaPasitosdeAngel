<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleados;
use App\Models\empleados_v;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\vistaNomina;

class EmpleadosController extends Controller
{


    

    public function indexx()
    {
        $nominas = vistaNomina::all(); // Obtener todas las nóminas
        return view('nomina_empleado.index', compact('nominas')); // Retornar la vista con las nóminas
    }
    public function activarNomina()
    {
        try {
            DB::table('empleados')->update(['nomina_activa' => 'a']);

            return redirect()->route('nominas_view')->with('success', 'Todas las nóminas han sido pagadas.');
        } catch (\Exception $e) {
            Log::error('Error al actualizar la tabla nomina: ' . $e->getMessage());

            return redirect()->route('nominas_view2')->with('error', 'Hubo un error al actualizar las nóminas.');
        }
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

        return view('View_Empleados');
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
