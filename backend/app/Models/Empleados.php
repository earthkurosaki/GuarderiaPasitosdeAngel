<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;
    protected $table = "empleados";
    protected $primaryKey = 'id_empleados';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
    protected $fillable = ['id_empleados', 'nombre', 'apellido', 'cedula', 'fechanac', 'genero', 'direccion', 'telefono', 'correo_electronico', 'fechaingreso', 'horariolabo', 'foracademica', 'teleemergencia', 'id_puesto',  'sueldo_base'];

}
