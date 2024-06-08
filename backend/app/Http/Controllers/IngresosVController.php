<?php

namespace App\Http\Controllers;
use App\Models\IngresosV;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IngresosVController extends Controller
{
    public function index(Request $request)
    {
        // Obtener los términos de búsqueda del formulario
        $dia = $request->input('dia');
        $mes = $request->input('mes');
        $anio = $request->input('anio');
        $semana = $request->input('semana');

        $query = IngresosV::query();
        // Verificar si se envió algún parámetro de filtro
        if ($dia || $mes || $anio || $semana) {
            // Llamada al procedimiento almacenado con parámetros opcionales
            $datos = DB::select('CALL filtrar_ingresos(?, ?, ?, ?)', [$dia ?: NULL, $mes ?: NULL, $anio ?: NULL, $semana ?: NULL]);
           // Imprimir la consulta SQL para depuración
        
        
        
        }
        
        else {
            // Si no se proporcionan parámetros de filtro, obtener todos los datos normales
            $datos = $query->get();
        }
    
        // Retornar la vista con los datos
        return view('ingresos_guarderia.index', ['datos' => $datos]);
    }
}
