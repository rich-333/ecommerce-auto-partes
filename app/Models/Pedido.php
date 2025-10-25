<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';
    protected $primaryKey = 'id_pedido';
    public $timestamps = false;

    public function usuario() { return $this->belongsTo(Usuario::class, 'id_usuario'); }
    public function detalles() { return $this->hasMany(DetallePedido::class, 'id_pedido'); }
}
