<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
    use HasFactory;
    protected $table = "actividades_adicionales";
    protected $fillable = ['id_actividad', 'nombre', 'descripcion', 'cupo_maximo', 'edad_minima', 'edad_maxima', 'costo'];
    protected $primaryKey = 'id_actividad';
    public $timestamps = false;
}
