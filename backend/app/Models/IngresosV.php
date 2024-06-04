<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngresosV extends Model
{
    protected $table = 'ingresos_vista'; // Especifica el nombre de la vista

    // Define los campos que son accesibles masivamente
    protected $fillable = [
        'id_ingresos', 'monto_total', 'fecha'
    ];

    // Indica que el campo 'fecha_ingreso' es un timestamp
    protected $dates = ['fecha'];

    // Si no deseas que Laravel maneje automáticamente los campos created_at y updated_at
    public $timestamps = false;
}
