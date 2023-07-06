<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipos_productos extends Model
{
    protected $fillable = ['tipo', 'estado'];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_tipos_productos');
    }

    use HasFactory;
}
