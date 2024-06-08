<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleados_v extends Model
{
    use HasFactory;
    protected $table = 'empl_v'; // Especifica el nombre de la vista

    // Define los campos que son accesibles masivamente
    protected $fillable = [
        'id_empleados', 'nombre', 'apellido', 'cedula', 'fechanac', 'genero',
        'direccion', 'telefono', 'correo_electronico', 'fechaingreso', 'horariolabo',
        'foracademica', 'teleemergencia', 'puesto', 'sueldo_base'
    ];

    // Indica que el campo 'fecha_ingreso' es un timestamp
    protected $dates = ['fechaingreso' ];

    // Si no deseas que Laravel maneje automáticamente los campos created_at y updated_at
    public $timestamps = false;
}
