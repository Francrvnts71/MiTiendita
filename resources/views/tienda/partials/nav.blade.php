<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand main-title" href="{{ route('home') }}">MiTiendita</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse collapse show" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('carrito-mostrar') }}">Carrito</a>
      </li>
      <!-- @include('tienda.partials.menu-usuario') -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por código de barras">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>