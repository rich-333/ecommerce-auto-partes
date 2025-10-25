<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id_producto';
    public $timestamps = false;

    public function categoria() { return $this->belongsTo(Categoria::class, 'id_categoria'); }
    public function marca() { return $this->belongsTo(Marca::class, 'id_marca'); }
    public function imagenes() { return $this->hasMany(ImagenProducto::class, 'id_producto'); }
    public function favoritos() { return $this->hasMany(Favorito::class, 'id_producto'); }
    public function carrito() { return $this->hasMany(Carrito::class, 'id_producto'); }
    public function calificaciones() { return $this->hasMany(Calificacion::class, 'id_producto'); }
    public function descuentos() { return $this->hasOne(Descuento::class, 'id_producto'); }
}
