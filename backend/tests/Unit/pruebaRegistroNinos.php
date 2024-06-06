<?php

namespace Tests\Unit;

use App\Http\Controllers\NinoController;
use Tests\TestCase;
use app\Models\Nino;

use Illuminate\Http\Request;


class pruebaRegistroNinos extends TestCase
{
    public function test_registro_de_nino()
    {

            // PROBAR CREACION DE RESERVA  
            $request = new Request([
            
            'nombre' => 'Abby',
            'apellido' => 'Padilla',
                
            'fecha_nac' => '2006/08/14',
            'edad' => 9,
            'genero' => 'Femenino',
            'nacionalidad' => 'Dominicana',    
             
            'modo_nacer' => 'Cesarea',
            'cant_hermanos' => 3,
            'niv_educativo' => 'Basico',
            'alergia' => 'Si',
            'desc_alergia' => 'Almendras',
            'discapacidad' => 'Si',
            'desc_discapacidad' => 'Miopia',


            ]);
    
 
            $response = (new NinoController)->store($request);
    
  
            $this->assertCount(16, Nino::all());
     

          
 
    }

}
