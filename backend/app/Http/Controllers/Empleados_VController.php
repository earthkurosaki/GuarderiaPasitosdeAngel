<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empleados_v;

class Empleados_VController extends Controller
{
    public function index2(Request $request)
    {
        $search = $request->input('search');

        $query = empleados_v::query();

        if ($search) {
            $query->where('id_empleados', $search);
        }

        $datos = $query->get();

        return view('empleados.view', compact('datos'));
    }
}
