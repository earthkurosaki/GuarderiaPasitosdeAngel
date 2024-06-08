<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{
    use HasFactory;
    protected $table = "pago";
    protected $fillable = ['id_pago', 'id_tutor', 'id_servicio', 'fecha', 'monto', 'metodo_pago', 'descripcion', 'id_empleados', 'actividad_adicional', 'id_nino'];
    protected $primaryKey = 'id_pago';
    public $timestamps = false;
}

