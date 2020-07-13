<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Productos;

class StoreController extends Controller
{
    public function index (Request $request) {
        $codigo = $request->get('buscarpor');

        if ($codigo <> '' ) {
        	$productos = Productos::where('codigobarras','like',"%$codigo%")->paginate(5);
        } else {
    		$productos = Productos::all();
        }

    	return view('tienda.index', compact('productos'));
    }

    public function mostrar($slug)
    {
    	$producto = Productos::where('slug', $slug)->first();
    	dd($producto);
    }
}
