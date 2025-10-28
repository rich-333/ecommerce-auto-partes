<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'password',
        'rol',
        'fecha_registro'
    ];

    protected $hidden = [
        'password',
    ];

    public function favoritos() { return $this->hasMany(Favorito::class, 'id_usuario'); }
    public function carrito() { return $this->hasMany(Carrito::class, 'id_usuario'); }
    public function calificaciones() { return $this->hasMany(Calificacion::class, 'id_usuario'); }
    public function pedidos() { return $this->hasMany(Pedido::class, 'id_usuario'); }
}

