@extends('tienda.template')

@section('content')
	
	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart"></i>
				Detalle del pedido
			</h1>
		</div>

		<div class="page">
			<div class="table-responsive">
                <h3>Datos del usuario</h3>
                <table class="table table-striped table-hover table-bordered">
                    <tr>
                        <td> 
                        	<div class="form-row">
		                        <div class="form-group col-md-6">
		                            <label for="inputEmail4">Nombre</label>
		                            <input type="text" class="form-control" name="name" placeholder="Ingresa tu nombre">
		                        </div>
		                    </div>
                        </td>
                    </tr>
                </table>
            </div>
            <br>
            <br>
            <div class="table-responsive">
                <h3>Datos del pedido</h3>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
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
                <hr>
                <div class="container text-center">
                    <table class="detalle-total">
                        <tbody>
                            <tr>
                                <td>
                                    <h5>
                                        <span class="badge">
                                            Subtotal:
                                        </span>
                                    </h5>
                                </td>
                                <td>
                                    <h5>
                                        <span class="badge">
											$ {{number_format($total, 2)}}
                                        </span>
                                    </h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>
                                        <span class="badge">
                                            IVA:
                                        </span>
                                    </h5>
                                </td>
                                <td>
                                    <h5>
                                        <span class="badge">
											$ {{number_format($total * 0.16, 2)}}
                                        </span>
                                    </h5>
                                </td>
                            </tr>
                            <tr class="badgeTotal">
                                <td>
                                    <h5>
                                        <span class="badge badge-success">
                                            Total:
                                        </span>
                                    </h5>
                                </td>
                                <td>
                                    <h5>
                                        <span class="badge">
                                            $ {{number_format($total * 1.16, 2)}}
                                        </span>
                                    </h5>
                                </td>
                            </tr>
                            <tr>
                            	<td>
                            		<a href="{{ route('carrito-mostrar') }}" class="btn btn-primary">
                            			<i class="fa fa-chevron-circle-left"></i> Regresar
                            		</a>
                            	</td>
                            	<td>
                            		<a href="{{ route('detalle-pagar') }}" class="btn btn-warning">
                            			Pagar <i class="fa fa-paypal"></i>
                            		</a>
                            	</td>
                            </tr>
                        </tbody>
                    </table>
				</div>
			</div>
		</div>
	</div>
@stop