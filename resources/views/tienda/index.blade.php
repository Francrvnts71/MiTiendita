@extends('tienda.template')

@section('content')
	<div class="container text-center">
    <div id="productos" >
        <div class="row">
        @foreach($productos as $producto)
        	<div class="col-md">
	        	<div class="white-panel">
	            	<h5><strong>{{$producto->nombre}}</strong></h5>
	                
                    <img class="img" src="images/{{$producto->imagen}}" style="width: 150px;">
	                    
	                    <div class="producto-info panel">   
                            <div>
                                <p class="lead">
                                    {{$producto->descripcion}}
                                </p>
                                <p class="lead">Disponibles: {{$producto->stock}}</p>

                                <p class="lead">Código de barras: {{$producto->codigobarras}}</p>

                                <hr class="my-4">

                                <h2>
                                    <span class="badge badge-success">Precio: ${{ number_format($producto->precio_venta, 2) }}</span>
                                </h2>

    	                        <div class="row text-center">
    	                            <div class="col-md">
    	                                <a class="btn btn-warning" href="{{ route('carrito-agregar', $producto->id) }}">
    	                                    &nbsp;<i class="fa fa-cart-plus"></i>&nbsp; Agregar a carrito
    	                                </a>
    	                            </div>
    	                        </div>
                            </div>

                    	</div>
                </div>
        		
        	</div>

        @endforeach
        </div>
        

    </div>
</div>


@stop