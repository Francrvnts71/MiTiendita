@extends('tienda.template')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
 
                <div class="panel-body">
                    <form method="POST" action="/auth/register">
                        {!! csrf_field() !!}

                        <div>
                            Name
                            <input type="text" name="name" value="{{ old('name') }}">
                        </div>

                        <div>
                            Email
                            <input type="email" name="email" value="{{ old('email') }}">
                        </div>

                        <div>
                            Password
                            <input type="password" name="password">
                        </div>

                        <div>
                            Confirm Password
                            <input type="password" name="password_confirmation">
                        </div>

                        <div>
                            <button type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection