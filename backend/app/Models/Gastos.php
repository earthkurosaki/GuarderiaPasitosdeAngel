<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gastos extends Model
{
    use HasFactory;
    protected $table = "gastos";
    protected $fillable = ['id_gasto', 'concepto','monto', 'fecha', 'descripcion'];
    protected $primaryKey = 'id_gasto';
    public $timestamps = false;
}
