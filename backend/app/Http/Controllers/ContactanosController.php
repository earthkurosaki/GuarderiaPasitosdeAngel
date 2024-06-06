<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactanos;

class ContactanosController extends Controller
{
    // public function show($id_contacto)
    // {
    //     $contacto = Contactanos::find($id_contacto);
    //     return view('/contactanos/update', ['contacto' => $contacto]);
    // }
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'correo' => 'required|string',
            'telefono' => 'required',
            'mensaje' => 'required|string',
        ]);

        $contacto = new Contactanos($request->all());
        $contacto->save();

        return view('welcome');
    }

    public function destroy($id_contacto)
    {
        $contacto = Contactanos::find($id_contacto);

        if ($contacto) {
            $contacto->delete();
            return view('/contactanos/view')->with('success', 'Todo deleted successfully');
        } else {
            return view('/contactanos/view')->with('error', 'Registro no encontrado');
        }

    }
}
