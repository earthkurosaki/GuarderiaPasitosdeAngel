<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empleados_v;

class Empleados_VController extends Controller
{
    public function index2(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            $empleados = empleados_v::where('nombre', 'like', '%' . $search . '%')
                ->orWhere('apellido', 'like', '%' . $search . '%')
                ->orWhere('cedula', 'like', '%' . $search . '%')
                ->get();
        } else {
            $empleados = empleados_v::all();
        }

        return view('empleados.view', ['empleados' => $empleados]);
    }
}
