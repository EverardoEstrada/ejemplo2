<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Pedidos extends Model
{
    use SoftDeletes;
    protected $table="pedidos";
    protected $fillable=[
        'descripcion',
        'unidades',
        'subtotal',
        'imagen'
    ];
}
