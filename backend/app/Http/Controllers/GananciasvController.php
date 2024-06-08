<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Importar la clase DB para utilizar consultas SQL
use App\Models\GananciasV;

class GananciasvController extends Controller
{
    public function index(Request $request)
    {
        // Obtener los términos de búsqueda del formulario
        $dia = $request->input('dia');
        $mes = $request->input('mes');
        $anio = $request->input('anio');
        $semana = $request->input('semana');

        $query = GananciasV::query();
        // Verificar si se envió algún parámetro de filtro
        if ($dia || $mes || $anio || $semana) {
            // Llamada al procedimiento almacenado con parámetros opcionales
            $datos = DB::select('CALL filtrar_ganancias(?, ?, ?, ?)', [$dia ?: NULL, $mes ?: NULL, $anio ?: NULL, $semana ?: NULL]);
           // Imprimir la consulta SQL para depuración
        
        
        
        }
        
        else {
            // Si no se proporcionan parámetros de filtro, obtener todos los datos normales
            $datos = $query->get();
        }
    
        // Retornar la vista con los datos
        return view('ganancias_guarderia.index', ['datos' => $datos]);
    }}
