<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImagenProducto extends Model
{
    protected $table = 'imagenes_productos';
    protected $primaryKey = 'id_imagen';
    public $timestamps = false;

    public function producto() { return $this->belongsTo(Producto::class, 'id_producto'); }
}
