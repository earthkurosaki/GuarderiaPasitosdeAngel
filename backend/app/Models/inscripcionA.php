<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inscripcionA extends Model
{
    use HasFactory;
    protected $table = "inscripciones_actividades";
    protected $fillable = ['id_inscripcion', 'id_actividad', 'id_nino'];
    protected $primaryKey = 'id_inscripcion';
    public $timestamps = false;
}
