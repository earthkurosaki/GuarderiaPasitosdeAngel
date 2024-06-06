<!-- //<?php

// namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nomina;

class NominaController extends Controller
{
    // public function show($cod_nomina)
    // {
    //     $nomina = Nomina::find($cod_nomina);
    //     return view('/nomina/update', ['nomina' => $nomina]);
    // }
    // public function store(Request $request)
    // {
    //     //Validar el request
    //     $validatedData = $request->validate([
    //         'cod_salario' => 'required',
    //         'sueldo_d' => 'required',
    //         'dias_laborads' => 'required',
    //         'hora_extras' => 'required|numeric',
    //         'comision' => 'required',
    //         'bonificacion' => 'required',
    //         'vacaciones' => 'required',
    //         'pago_final' => 'required|numeric',
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
            'dias_laborads' => 'required',
            'hora_extras' => 'required|numeric',
            'comision' => 'required',
            'bonificacion' => 'required',
            'vacaciones' => 'required',
            'pago_final' => 'required|numeric',
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
    
        //     $nomina->save();

            return view('nomina/view', ['nomina' => $nomina]);
        } else {
            return view('nomina/view')->with('error', 'Registro no encontrado');
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

//}
