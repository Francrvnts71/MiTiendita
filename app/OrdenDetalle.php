<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenDetalle extends Model
{
    protected $table = 'orden_detalles';

    protected $fillable = ['precio', 'cantidad', 'idProducto', 'idOrden' ];
}
