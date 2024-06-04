<?php

namespace App\Http\Controllers;
use App\Models\IngresosV;

use Illuminate\Http\Request;

class IngresosVController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = IngresosV::query();

        // if ($search) {
        //     $query->where('id_empleados', $search);
        // }

        $datos = $query->get();

        return view('ingresos_guarderia.index', compact('datos'));
    }
}
