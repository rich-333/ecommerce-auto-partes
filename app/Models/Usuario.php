<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    public $timestamps = false;

    public function favoritos() { return $this->hasMany(Favorito::class, 'id_usuario'); }
    public function carrito() { return $this->hasMany(Carrito::class, 'id_usuario'); }
    public function calificaciones() { return $this->hasMany(Calificacion::class, 'id_usuario'); }
    public function pedidos() { return $this->hasMany(Pedido::class, 'id_usuario'); }
}
