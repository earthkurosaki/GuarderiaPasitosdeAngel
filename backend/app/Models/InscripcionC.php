<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InscripcionC extends Model
{
    use HasFactory;
    protected $table = "inscripciones_curso";
    protected $fillable = ['id_inscripcion', 'id_curso', 'id_nino'];
    protected $primaryKey = 'id_inscripcion';
    public $timestamps = false;
}
