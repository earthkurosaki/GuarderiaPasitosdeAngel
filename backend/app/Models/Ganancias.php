<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ganancias extends Model
{
    use HasFactory;
    protected $table = "ganancias";
    protected $fillable = ['id_ganancia', 'descripcion', 'monto', 'fecha'];
    protected $primaryKey = 'id_ganancia';
    public $timestamps = false;
}
