<?php

namespace Tests\Unit;


use App\Http\Controllers\EmpleadosController;
use Tests\TestCase;
use app\Models\Empleados;

use Illuminate\Http\Request;



class registroEmpleadosTest extends TestCase
{
    /**
     * A basic unit test example.
     */public function test_registro_de_empl()
    {

        // PROBAR CREACION DE RESERVA  
        $request = new Request([
        
        'nombre' => 'Abby',
        'apellido' => 'Padilla',
            
        'cedula' => '14785474525',
        'fechanac' => '2006/12/12',
        'genero' => 'Femenino',
        'direccion' => 'Matanza',
        'telefono' => '1452365263',    
         
        'correo_electronico' => 'dfsdfsdf',
        'horariolabo' => 'Vespertino',
        'foracademica' => 'Bachiller',
        'teleemergencia' => '123636525',
        'id_puesto' => 1,
        'sueldo_base' => '20000',
        


        ]);


        $response = (new EmpleadosController)->store($request);


        $this->assertCount(7, Empleados::all());
 

      

}
}
