<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use HasFactory;
    protected $table = "cursos";
    protected $fillable = ['id_curso', 'nombre','descripcion', 'duracion', 'horario', 'dia', 'id_empleados', 'num_ninos'];
    protected $primaryKey = 'id_curso';
    public $timestamps = false;
}
