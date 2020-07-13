@extends('tienda.template')

@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart"></i> Carrito de Compras
			</h1>
		</div>

		<div class="tabla-carrito">
			@if(count($carrito))

			<div class="table-responsive">
				<table class="table table-striped table-hover table-bordered">
					<thead>
						<tr>
							<th>Imagen</th>				
							<th>Producto</th>				
							<th>Precio</th>				
							<th>Cantidad</th>				
							<th>Subtotal</th>				
							<th>Quitar</th>	
						</tr>
					</thead>
					<tbody>
						@foreach($carrito as $item)
							<tr>
								<td><img src="../images/{{ $item->imagen }}"></td>
								<td>{{ $item->nombre }}</td>
								<td>{{ number_format($item->precio_venta,2) }}</td>
								<td>
									<input type="number" min="1" max="100" value="{{ $item->cantidad }}" id="producto_{{ $item->id }}">

									<a 
										class="btn btn-warning btn-update-item" href="#" 
										data-href="{{ route('carrito-actualizar', $item->id) }}"
										data-id="{{ $item->id }}"
									>
										<i class="fa fa-refresh"></i>
									</a>
								</td>
								<td>{{ number_format($item->precio_venta * $item->cantidad,2) }}</td>
								<td>
									<a href=" {{ route('carrito-borrar', $item->id) }}" class="btn btn-danger">
										<i class="fa fa-remove"></i>
									</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				<hr>

				<h3>
					<span class="badge badge-success">
						Total: $ {{ number_format($total,2) }}
					</span>
				</h3>			
			</div>
			@else
				<h3><span class="badge badge-warning">No hay productos en el carrito :(</span></h3>
			@endif

			<hr>

			<p>
				<a class="btn btn-primary" href="{{ route('home') }}">
					<i class="fa fa-chevron-circle-left"></i> Seguir comprando
				</a>

				 <a class="btn btn-primary" href="{{ route('detalle-orden') }}">
					Continuar <i class="fa fa-chevron-circle-right"></i>
				</a> 
			</p>

		</div>
		
	</div>
@stop