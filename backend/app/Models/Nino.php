<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nino extends Model
{
    use HasFactory;

    // Define the table associated with the model if it's not the plural of the model name
    protected $table = 'nino';

    // Specify the primary key if it's not 'id'
    protected $primaryKey = 'id_nino';

    // Indicates if the IDs are auto-incrementing
    public $incrementing = true;

    // Specifies the data type of the primary key
    protected $keyType = 'int';

    // Indicates if the model should be timestamped
    public $timestamps = false;

    // Define the fillable fields
    protected $fillable = [
        'nombre',
        'apellido',
        'fecha_nac',
        'edad',
        'genero',
        'nacionalidad',
        'modo_nacer',
        'cant_hermanos',
        'niv_educativo',
        'alergia',
        'desc_alergia',
        'discapacidad',
        'desc_discapacidad'
    ];
}
