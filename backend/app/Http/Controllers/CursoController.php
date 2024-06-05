<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cursos;
use App\Models\Empleados;
class CursoController extends Controller
{
    public function show($id_curso)
    {
        $curso = Cursos::find($id_curso);
        $empleado = Empleados::all();
        return view('/cursos/update', compact('curso', 'empleado') );
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'nullable',
            'duracion' => 'nullable|string',
            'horario' => 'required|string',
            'dia' => 'required|string',
            'id_empleados' => 'required',
        ]);

        $curso = new Cursos($request->all());
        $curso->save();

        return view('/cursos/view');
    }

    public function update(Request $request, $id_curso)
    {
        
        //Validar el request
        $validatedData = $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'nullable',
            'duracion' => 'nullable|string',
            'horario' => 'required',
            'dia' => 'required|string',
            'id_empleados' => 'required',
        ]);

        //Buscar el registro existente
        dd($id_curso);
        try {
           
            $curso = Cursos::findOrFail($id_curso);
    
            // Actualizar los campos del curso con los datos del formulario
            $curso->nombre = $validatedData['nombre'];
            $curso->descripcion = $validatedData['descripcion'];
            $curso->duracion = $validatedData['duracion'];
            $curso->horario = $validatedData['horario'];
            $curso->dia = $validatedData['dia'];
            $curso->id_empleados = $validatedData['id_empleados'];
    
            // Guardar los cambios en la base de datos
            $curso->save();

            return view('cursos/view', ['curso' => $curso]);
        } catch (\Exception $e){
            return view('cursos/view')->with('error', 'Registro no encontrado');
        }
    }

    public function destroy($id_curso)
    {
        $curso = cursos::find($id_curso);

        if ($curso) {
            $curso->delete();
            return view('/cursos/view')->with('success', 'Todo deleted successfully');
        } else {
            return view('/cursos/view')->with('error', 'Registro no encontrado');
        }

    }
}
