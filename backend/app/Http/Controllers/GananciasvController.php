<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GananciasV;

class GananciasvController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = GananciasV::query();

        if ($search) {
            $query->where('id_ganancias', $search);
        }

        $datos = $query->get();

        return view('ganancias_guarderia.index', compact('datos'));
    }
}
