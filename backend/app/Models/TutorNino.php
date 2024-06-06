<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorNino extends Model
{
    use HasFactory;
    protected $table = 'tutor_ninov'; // Nombre de la vista en la base de datos

    protected $fillable = [
        'id_tutor',
        'tutor_nombre',
        'tutor_apellido',
        'id_nino',
        'nino',
        'nino_apellido',
        'relacion_parental',
    ];

    // Si no necesitas timestamps, puedes deshabilitarlos
    public $timestamps = false;
}
