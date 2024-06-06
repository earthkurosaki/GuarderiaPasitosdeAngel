<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Tutores;
use Illuminate\Support\Facades\DB;



class TutoresController extends Controller{
    public function index(Request $request)
{
    $search = $request->input('search');
    if ($search) {
        $tutores = DB::table('tutores')->where('nombre', 'like', '%' . $search . '%')->get();
    } else {
        $tutores = DB::table('tutores')->get();
    }
// Depurar la variable $search y la colección $tutores

    return view('tutores.view', ['tutores' => $tutores, 'search' => $search]); // Pasar la variable de búsqueda a la vista
}
    
    public function show($id_tutor)
    {
        $tutores = Tutores::find($id_tutor);
        return view('/tutores/update', ['tutor' => $tutores]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'fechanac' => 'required',
            'cedula' => 'required',
            'lugar_trabajo' => 'required|string',
            'cargo' => 'required|string',
            'nivel_academico' => 'required|string',
            'profesion' => 'nullable|string',
            'direccion' => 'required|string',
            'telefono' => 'required',
            'email' => 'required',
            'estado_civil' => 'required|string',
            'rel_parental' => 'required|string',
        ]);
        $tutor = new Tutores($request->all());
        $tutor->save();
        return view('dashboard');
    }

    public function update(Request $request, $id_tutor)
    {
        //Validar el request
        $validatedData = $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'fechanac' => 'required',
            'cedula' => 'required',
            'lugar_trabajo' => 'required|string',
            'cargo' => 'required|string',
            'nivel_academico' => 'required|string',
            'profesion' => 'nullable|string',
            'direccion' => 'required|string',
            'telefono' => 'required',
            'email' => 'required',
            'estado_civil' => 'required|string',
            'rel_parental' => 'required|string',
        ]);

        //Buscar el registro existente
        $tutor = Tutores::find($id_tutor);
        if ($tutor) {
            $tutor->nombre = $validatedData['nombre'];
            $tutor->apellido = $validatedData['apellido'];
            $tutor->fechanac = $validatedData['fechanac'];
            $tutor->cedula = $validatedData['cedula'];
            $tutor->lugar_trabajo = $validatedData['lugar_trabajo'];
            $tutor->cargo = $validatedData['cargo'];
            $tutor->nivel_academico = $validatedData['nivel_academico'];
            $tutor->profesion = $validatedData['profesion'];
            $tutor->direccion = $validatedData['direccion'];
            $tutor->telefono = $validatedData['telefono'];
            $tutor->email = $validatedData['email'];
            $tutor->estado_civil = $validatedData['estado_civil'];
            $tutor->rel_parental = $validatedData['rel_parental'];

            $tutor->save();


            return view('View_Tutores', ['tutor' => $tutor]);
        } else {
            return view('View_Tutores')->with('error', 'Registro no encontrado');
        }

        
    }

    public function destroy($id_tutor)
    {
        $tutor = Tutores::find($id_tutor);

        if ($tutor) {
            $tutor->delete();
            return view('/tutores/view')->with('success', 'Todo deleted successfully');
        } else {
            return view('/tutores/view')->with('error', 'Registro no encontrado');
        }

    }
} 


  