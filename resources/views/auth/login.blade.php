@extends('tienda.template')

@section('content')
<div class="content text-center" style="margin-top:35px;">
    <div class="page-header">
        <h1 class="text"><i class="fa fa-user"></i> Registro</h1>
    </div>
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="page jumbotron">
                @include('tienda.partials.errors')

                <form method="POST" action="{{ route('registro-post')}}">
                    {!! csrf_field() !!}
                    <h6 class="text">Datos generales</h6>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nombre</label>
                            <input type="text" class="form-control" name="name" placeholder="Nombre">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Apeliidos</label>
                            <input type="text" class="form-control" name="lastName" value="{{ old('lastName') }}"
                                placeholder="Apellidos">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Correo electronico</label>
                            <input class="form-control" type="email" name="email" value="{{ old('email') }}"
                                placeholder="Correo electronico">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Telefono</label>
                            <input type="text" class="form-control" name="telephone" value="{{ old('telephone') }}"
                                placeholder="Numero de telefono">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPassword">Contraseña</label>
                            <input class="form-control" type="password" name="password" placeholder="Contraseña">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Confirmar Contraseña</label>
                            <input class="form-control" type="password" name="password_confirmation"
                                placeholder="Confirmar Contraseña">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Fecha de Nacimiento</label>
                            <input type="Date" class="form-control" name="birthDate" value="{{ old('birthDate') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputSex">Genero</label>
                            <select name="gender" class="form-control">
                                <option selected>Masculino</option>
                                <option>Femenino</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <h6 class="text">Dirección</h6>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputAddress">Calle</label>
                            <input type="text" class="form-control" name="street" value="{{ old('street') }}"
                                placeholder="Calle principal">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputAddress2">Num. Ext.</label>
                            <input type="text" class="form-control" name="numExt" value="{{ old('numExt') }}"
                                placeholder="Numero Exterior">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputAddress2">Num. Int.</label>
                            <input type="text" class="form-control" name="numInt" value="{{ old('numInt') }}"
                                placeholder="Numero interior">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputAddress">Colonia</label>
                            <input type="text" class="form-control" name="district" value="{{ old('district') }}"
                                placeholder="Colonia o Fraccionamiento">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputAddress2">C.P</label>
                            <input type="text" class="form-control" name="zip" value="{{ old('zip') }}"
                                placeholder="Codigo postal">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputAddress2">Referencias</label>
                            <input type="text" class="form-control" name="references" value="{{ old('references') }}"
                                placeholder="Referencias de la vivienda">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputState">Estado</label>
                            <select name="state" class="form-control state" id="state">
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity">Ciudad</label>
                            <select name="city" class="form-control city" id="city">

                            </select>
                        </div>

                    </div>
                    <button type="submit" class="btn btnLeer">Registrar</button>
                    <button type="reset" class="btn btn-bg-danger">
                        <a href="{{ route('home') }}">Cancelar</a>
                    </button>

                </form>
            </div>
        </div>
    </div>
</div>
@stop

<!-- <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'auth/login', 'class' => 'form']) !!}
                            <div class="form-group">
                                <label>Email</label>
                                {!! Form::email('email', '', ['class'=> 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                {!! Form::password('password', ['class'=> 'form-control']) !!}
                            </div>
                            <div class="checkbox">
                                <label><input name="remember" type="checkbox"> Remember me</label>
                            </div>
                            <div>                            
                                {!! Form::submit('login',['class' => 'btn btn-primary']) !!}
                            </div>
                        {!! Form::close() !!}
                    </div> 
                </div>
            </div>
        </div>
    </div> -->