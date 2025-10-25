<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    protected $table = 'calificaciones';
    protected $primaryKey = 'id_calificacion';
    public $timestamps = false;

    public function usuario() { return $this->belongsTo(Usuario::class, 'id_usuario'); }
    public function producto() { return $this->belongsTo(Producto::class, 'id_producto'); }
}
