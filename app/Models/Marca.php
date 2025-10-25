<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marcas';
    protected $primaryKey = 'id_marca';
    public $timestamps = false;

    public function producto() { return $this->hasMany(Producto::class, 'id_marca'); }
}
