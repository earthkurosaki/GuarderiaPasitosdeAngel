<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutores extends Model
{
    use HasFactory;
    protected $table = "tutores";
    protected $fillable = ['id_tutor', 'nombre', 'apellido', 'fechanac', 'cedula', 'lugar_trabajo', 'cargo', 'nivel_academico', 'profesion', 'direccion', 'telefono', 'email', 'estado_civil'];
    protected $primaryKey = 'id_tutor';
    public $timestamps = false;
}
