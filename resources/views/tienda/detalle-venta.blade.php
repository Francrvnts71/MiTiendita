@extends('tienda.template')

@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1>
				Ticket de Venta
			</h1>
		</div>

		<div class="page">
			<div class="table-responsive">
				<table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre del Cliente</th>
                            <th>Fecha</th>
                            <th>Productos</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($carrito as $item)
                        <tr>
                            <td>{{ $item->nombre }}</td>
                        	<td> ${{number_format($item->precio_venta, 2)}}</td>
                            <td> {{$item->cantidad}} </td>
                            <td>${{number_format($item->precio_venta * $item->cantidad , 2)}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
			</div>
		</div>
	</div>

@stop