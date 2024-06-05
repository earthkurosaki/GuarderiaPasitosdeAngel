<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vistaNomina;
use DB;

class vistaNominaController extends Controller
{
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
