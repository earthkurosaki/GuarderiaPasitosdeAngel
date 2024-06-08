<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vistaNomina;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class vistaNominaController extends Controller
{

    public function pagarNomina()
    {
        try {
            DB::table('nomina')->update(['estado' => 'p']);

            return redirect()->route('/nomina_empleado/index')->with('success', 'Todas las nóminas han sido pagadas.');
        } catch (\Exception $e) {
            Log::error('Error al actualizar la tabla nomina: ' . $e->getMessage());

            return redirect()->route('nominas/view')->with('error', 'Hubo un error al actualizar las nóminas.');
        }}
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = vistaNomina::query();

        if ($search) {
            $query->where('id_empleados', $search);
        }

        $datos = $query->get();

        return view('nomina_empleado.index', compact('datos'));
    }
}
