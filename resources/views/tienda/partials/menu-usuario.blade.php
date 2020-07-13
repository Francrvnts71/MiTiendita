@if(Auth::check())
	<li class="nav-item dropdown">
	    <a class="nav-link dropdown-toggle" style="color:#FFF;" href="#" id="navbarDropdown" role="button"
	        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	        {{ Auth::user()->name }}
	    </a>
	    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	        <a class="dropdown-item" href="{{route('getOrders', Auth::user()->id)}}">Mis compras</a>
	        <div class="dropdown-divider"></div>
	        <a class="dropdown-item" href="{{ route('user.config.show', Auth::user()) }}">Configuración</a>
	        <div class="dropdown-divider"></div>
	        <a class="dropdown-item" href="{{route('logout')}}">Cerrar sesión</a>
	    </div>
	</li>
@else
	<li class="nav-item dropdown">
	    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
	        aria-haspopup="true" aria-expanded="false" style="color:#FFF;">
	        <i class="fa fa-user" style="color:#FFF;"></i>
	    </a>
	    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	        <a class="dropdown-item" href="{{ route('login-get') }}">Iniciar sesion</a>
	        <a class="dropdown-item" href="{{ route('registro-get') }}">Registrarse</a>
	    </div>
	</li>
@endif