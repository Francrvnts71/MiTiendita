
@section('content')
    
    <div class="col-sm-offset-3 col-sm-6">
        <div class="panel-title">
            <h1>Productos</h1>
        </div>

        <div class="panel-body">

            <form action="/productos" method="POST">

                <div class="form-group">
                    <label for="name" class="control-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name" class="control-label">Descripción</label>
                    <input type="text" name="descripcion" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name" class="control-label">Stock</label>
                    <input type="text" name="stock" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name" class="control-label">Precio Unitario</label>
                    <input type="text" name="precio_unitario" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name" class="control-label">Precio Venta</label>
                    <input type="text" name="precio_venta" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Registrar Producto
                    </button>
                </div>
            </form>
        </div> 
    </div>

@endsection