<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GananciasV extends Model
{
    protected $table = 'ganancias'; // Especifica el nombre de la vista

    // Define los campos que son accesibles masivamente
    protected $fillable = [
        'id_ganancias', 'fecha', 'ganancia'
    ];

    // Indica que el campo 'fecha' es un timestamp
    protected $dates = ['fecha'];

    // Si no deseas que Laravel maneje automáticamente los campos created_at y updated_at
    public $timestamps = false;
}
