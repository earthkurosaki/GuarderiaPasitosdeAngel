<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;
    protected $table = "empleados";
    protected $fillable = ['id_empleado', 'nombre', 'apellido', 'cedula', 'fechanac', 'genero', 'dirreccion', 'telefono', 'correo_electronico', 'fechaingreso', 'horariolabo', 'foracademica', 'teleemergencia', 'id_puesto',  'sueldo_base'];
    protected $primaryKey = 'id_empleado';
    public $timestamps = false;
}
