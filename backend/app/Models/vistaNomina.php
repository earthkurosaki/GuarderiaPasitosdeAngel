<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vistaNomina extends Model
{
    protected $table = 'nomina_empleado'; // Especifica el nombre de la vista

    // Define los campos que son accesibles masivamente
    protected $fillable = [
        'id_empleado', 'nombre', 'apellido', 'cedula', 'fecha_ingreso', 'puesto',
        'sueldo_base', 'dias_laborados', 'hora_extras', 'comision', 'bonificacion',
        'vacaciones', 'monto_final'
    ];

    // Indica que el campo 'fecha_ingreso' es un timestamp
    protected $dates = ['fecha_ingreso'];

    // Si no deseas que Laravel maneje automáticamente los campos created_at y updated_at
    public $timestamps = false;
}
