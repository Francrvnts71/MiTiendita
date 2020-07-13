<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Productos;
use App\Orden;
use App\OrdenDetalle;

class CarritoController extends Controller
{
    public function _construct()
    {
    	if (!\Session::has('carrito'))
    		\Session::put('carrito', array());
    }

    //Mostrar el carrito
    public function Mostrar()
    {
    	$carrito = \Session::get('carrito');
    	$total = $this->total();
        //dd($carrito);
    	return view('tienda.carrito', compact('carrito', 'total'));
    }

    // Agregar un producto
    // public function agregar($id)
    // {
    // 	$carrito = \Session::get('carrito');
    // 	$producto = Productos::where('id')->get();
    // 	\Session::put('carrito', $carrito);

    // 	return redirect()->route('carrito-mostrar');
    // }

    public function agregar(Productos $producto)
    {
    	$carrito = \Session::get('carrito');
    	$producto->cantidad = 1;
    	$carrito[$producto->id] = $producto;
    	\Session::put('carrito', $carrito);

    	return redirect()->route('carrito-mostrar');
    }

    // Borrar un producto
    public function borrar(Productos $producto)
    {
    	$carrito = \Session::get('carrito');
    	unset($carrito[$producto->id]);
    	\Session::put('carrito', $carrito);

    	return redirect()->route('carrito-mostrar');
    }

    // Actualizar un producto
    public function actualizar(Productos $producto, $cantidad)
    {
    	$carrito = \Session::get('carrito');
    	$carrito[$producto->id]->cantidad = $cantidad;
    	\Session::put('carrito', $carrito);

    	return redirect()->route('carrito-mostrar');
    }

    // Total de la compra
    private function total()
    {
    	$carrito = \Session::get('carrito');
    	$total = 0;
        
        foreach ($carrito as $item) {
            $total += $item->precio_venta * $item->cantidad;
        }        
    	
    	return $total;
    }

    public function DetalleOrden()
    {
        if(count(\Session::get('carrito')) <= 0)
            return redirect()->route('home');

        $carrito = \Session::get('carrito');
        $total = $this->total();

        return view('tienda.detalle-orden', compact('carrito', 'total'));
        
    }

    protected function guardarOrden()
    {
        $subtotal = 0;
        $carrito = \Session::get('carrito');
        $iva = 0;

        foreach ($carrito as $producto) {
            $subtotal += $producto->cantidad * $producto->precio_venta;
        }

        $iva = $subtotal * 0.16;
        $subtotal = $subtotal * 1.00;

        $order = Orden::create([
            'subtotal' => $subtotal,
            'iva' => $iva,
            'idUser' => 1
        ]);    

        foreach ($carrito as $producto) {
            $this -> guardarOrdenDetalle($producto, $order->id);
        }

        return redirect()->route('home');        
    }

    protected function guardarOrdenDetalle($producto, $idOrden)
    {
        OrdenDetalle::create([
            'precio' => $producto->precio_venta,
            'cantidad' => $producto->cantidad,
            'idProducto' => $producto->id,
            'idOrden' => $idOrden
        ]);

        $stock = $producto->stock - $producto->cantidad;

        $productos= Productos::findOrFail($producto->id);
        $productos->stock = $stock;
        $productos->save();

        $carrito = \Session::get('carrito');
        unset($carrito[$producto->id]);
        \Session::put('carrito', $carrito);
    }
}
