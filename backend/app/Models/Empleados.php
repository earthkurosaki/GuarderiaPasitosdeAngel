<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;
    protected $table = "empleados";
    protected $fillable = ['id_empleados', 'nombre', 'apellido', 'cedula', 'fechanac', 'genero', 'direccion', 'telefono', 'correo_electronico', 'fechaingreso', 'horariolabo', 'foracademica', 'teleemergencia', 'id_puesto'];
    protected $primaryKey = 'id_empleados';
    public $timestamps = false;
}
