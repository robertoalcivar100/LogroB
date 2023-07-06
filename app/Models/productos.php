<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $fillable = ['nombre_producto', 'precio', 'cantidad', 'fecha_ingreso', 'estado', 'id_tipos_productos'];

    public function tipoProducto()
    {
        return $this->belongsTo(TipoProducto::class, 'id_tipos_productos');
    }
    use HasFactory;
}
