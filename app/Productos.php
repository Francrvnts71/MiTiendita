<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
	protected $table = 'productos';

	protected $fillable = ['nombre', 'slug', 'descripcion', 'codigobarras', 'stock', 'imagen', 'precio_unitario', 'precio_venta'];
}
