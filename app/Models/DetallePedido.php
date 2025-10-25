<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    protected $table = 'detalle_pedidos';
    protected $primaryKey = 'id_detalle';
    public $timestamps = false;

    public function pedidos() { return $this->belongsTo(Pedido::class, 'id_pedido'); }
    public function producto() { return $this->belongsTo(Producto::class, 'id_producto'); }
}
