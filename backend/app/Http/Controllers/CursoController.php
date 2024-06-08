<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cursos;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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
        // Validar el request
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:75',
            'descripcion' => 'nullable|string',
            'duracion' => 'nullable|string|max:75',
            'horario' => 'required|string',
            'dia' => 'required|string|max:75',
            'id_empleados' => 'required|integer',
            'num_ninos' => 'nullable|integer',
        ]);
    
        try {
            // Buscar el registro existente
            $curso = Cursos::findOrFail($id_curso);
            $curso->update($validatedData);
    
            return redirect()->route('View_Cursos')->with('success', 'Curso actualizado exitosamente');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('View_Cursos')->with('error', 'Curso no encontrado');
        } catch (\Exception $e) {
            return redirect()->route('View_Cursos')->with('error', 'Ocurrió un error al actualizar el curso');
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
