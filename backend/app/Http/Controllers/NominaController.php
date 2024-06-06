<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nomina;
use App\Models\vistaNomina;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class NominaController extends Controller
{

    
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
        //Validar el request
        $validatedData = $request->validate([
            'cod_salario' => 'required',
            'sueldo_d' => 'required',
            'dias_laborados' => 'nullable',
            'hora_extras' => 'nullable',
            'comision' => 'nullable',
            'bonificacion' => 'nullable',
            'vacaciones' => 'nullable',
            'pago_final' => 'nullable',
            'estado' => 'required',
        ]);

        //Buscar el registro existente
        $nomina = Nomina::find($cod_nomina);
        if ($nomina) {
            $nomina->cod_salario = $validatedData['cod_salario'];
            $nomina->sueldo_d = $validatedData['sueldo_d'];
            $nomina->dias_laborados = $validatedData['dias_laborados'];
            $nomina->hora_extras = $validatedData['hora_extras'];
            $nomina->comision = $validatedData['comision'];
            $nomina->bonificacion = $validatedData['bonificacion'];
            $nomina->vacaciones = $validatedData['vacaciones'];
            $nomina->pago_final = $validatedData['pago_final'];
            $nomina->estado = $validatedData['estado'];
    
            $nomina->save();

            return view('nominas/view', ['nomina' => $nomina]);
        } else {
            return view('nominas/view')->with('error', 'Registro no encontrado');
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

