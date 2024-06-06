<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nomina extends Model
{
    use HasFactory;

    protected $table = "nomina";
    protected $fillable = ['cod_nomina', 'cod_salario', 'sueldo_d', 'dias_laborados', 'hora_extras', 'comision', 'bonificacion', 'vacaciones', 'pago_final', 'estado' ];
    protected $primaryKey = 'cod_nomina';
    public $timestamps = false;
    

}
