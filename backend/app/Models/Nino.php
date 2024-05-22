<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nino extends Model
{
    use HasFactory;

    protected $table = "nino";
    protected $fillable = ['id_nino', 'nombre', 'apellido', 'fecha_nac', 'edad', 'genero', 'nacionalidad', 'modo_nacer', 'cant_hermanos', 'niv_educativo', 'alergia', 'desc_alergia', 'discapacidad', 'desc_discapacidad'];
    protected $primaryKey = 'id_nino';
    public $timestamps = false;
}
