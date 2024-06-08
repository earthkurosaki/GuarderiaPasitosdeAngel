<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactanos extends Model
{
    use HasFactory;
    protected $table = "contactanos";
    protected $fillable = ['id_contacto', 'nombre', 'correo', 'telefono', 'mensaje'];
    protected $primaryKey = 'id_contacto';
    public $timestamps = false;
}
