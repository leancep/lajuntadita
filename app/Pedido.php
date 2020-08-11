<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';
    protected $fillable = [
        'name',
        'dni',
        'tel',
        'direccion',
        'localidad',
        'menu',
        'tamaño',
        'precio',
        'costoEnvio',
        'precioTotal',

    ];
}