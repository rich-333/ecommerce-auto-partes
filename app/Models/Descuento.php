<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Descuento extends Model
{
    protected $table = 'descuentos';
    protected $primaryKey = 'id_descuento';
    public $timestamps = false;

    public function producto() { return $this->belongsTo(Producto::class, 'id_producto'); }
}
