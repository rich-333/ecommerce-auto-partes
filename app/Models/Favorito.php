<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
    protected $table = 'favoritos';
    protected $primaryKey = 'id_favorito';
    public $timestamps = false;

    protected $fillable = ['id_usuario', 'id_producto', 'cantidad'];

    public function usuario() { return $this->belongsTo(Usuario::class, 'id_usuario'); }
    public function producto() { return $this->belongsTo(Producto::class, 'id_producto'); }
}
