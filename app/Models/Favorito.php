<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
    protected $table = '';
    protected $primaryKey = '';
    public $timestamps = false;

    public function usuario() { return $this->belongsTo(Usuario::class, 'id_usuario'); }
    public function producto() { return $this->belongsTo(Producto::class, 'id_producto'); }
}
