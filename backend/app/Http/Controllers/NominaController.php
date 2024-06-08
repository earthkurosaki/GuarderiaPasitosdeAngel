<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nomina;
use App\Models\vistaNomina;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class NominaController extends Controller
{

    public function search(Request $request)
{
    $search = $request->input('search');

    $nominas = DB::table('nomina')
                ->join('salario', 'nomina.cod_salario', '=', 'salario.cod_salario')
                ->join('empleados', 'salario.id_empleados', '=', 'empleados.id_empleados')
                ->where('empleados.nombre', 'LIKE', "%$search%")
                ->select('nomina.*', 'salario.sueldo_base', 'empleados.nombre', 'empleados.apellido')
                ->get();

    return view('nominas.view', compact('nominas'));
}
    public function index()
    {
        $nominas = vistaNomina::all(); // Obtener todas las nóminas
        return view('nomina_empleado.index', compact('nominas')); // Retornar la vista con las nóminas
    }

    public function pagarNomina()
    {
        try {
            DB::table('nomina')->update(['estado' => 'p']);
            DB::statement('CALL limpiar_nomina()');

            return redirect()->route('nominas_view')->with('success', 'Todas las nóminas han sido pagadas.');
        } catch (\Exception $e) {
            Log::error('Error al actualizar la tabla nomina: ' . $e->getMessage());

            return redirect()->route('nominas_view2')->with('error', 'Hubo un error al actualizar las nóminas.');
        }
    }
       public function show($cod_nomina)
    {
        $nomina = Nomina::find($cod_nomina);
        return view('/nominas/update', ['nomina' => $nomina]);
    }
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'nombre' => 'required|string',
    //         'apellido' => 'required|string',
    //         'fecha_nac' => 'required',
    //         'edad' => 'required|numeric',
    //         'genero' => 'required',
    //         'nacionalidad' => 'required|string',
    //         'modo_nacer' => 'required',
    //         'cant_hermanos' => 'required|numeric',
    //         'niv_educativo' => 'required|string',
    //         'alergia' => 'required',
    //         'desc_alergia' => 'nullable|string',
    //         'discapacidad' => 'required',
    //         'desc_discapacidad' => 'nullable|string',
    //     ]);

    //     $nino = new Nino($request->all());
    //     $nino->save();

    //     return view('/nino/view');
    // }

    public function update(Request $request, $cod_nomina)
    {
        // Validar el request
        $validatedData = $request->validate([
            'cod_salario' => 'required|string',
            'sueldo_d' => 'required',
            'dias_laborados' => 'nullable',
            'hora_extras' => 'nullable',
            'comision' => 'nullable',
            'bonificacion' => 'nullable', // Asegúrate que 'direccion' sea el nombre correcto
            'vacaciones' => 'nullable',
            'pago_final' => 'nullable',
            'estado' => 'nullable',
            
        ]);
    
        $nomina = Nomina::find($cod_nomina);
        if ($nomina) {
            $nomina->update($validatedData);
            return redirect()->route('View_Nominas')->with('success', 'Empleado actualizado exitosamente');
        } else {
            return redirect()->route('View_Nominas')->with('error', 'Empleado no encontrado');
        }
    }


    // public function destroy($cod_nomina)
    // {
    //     $nomina = Nomina::find($cod_nomina);

    //     if ($nomina) {
    //         $nomina->delete();
    //         return view('/nomina/view')->with('success', 'Todo deleted successfully');
    //     } else {
    //         return view('/nomina/view')->with('error', 'Registro no encontrado');
    //     }

    // }

}

