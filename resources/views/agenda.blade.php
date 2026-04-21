@extends('layouts.landing')
@section('content')
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">

    <a class="navbar-brand" href="javascript:void(0)">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
    <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="mynavbar">

      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Contacto</a>
        </li>
      </ul>

          <form class="d-flex" action="{{ route('login') }}" method="GET">
            <button class="btn btn-success">Iniciar Sesión / Registrarse</button>
          </form> 

          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
            Log Out <i class="bi bi-box-arrow-right"></i> </a>
            </li>
            </ul>
          </form>
    </div>
  </div>
</nav>

<div class="container-fluid px-4">

            <h3 class="card_title" style="padding: 10px;">Lugares Disponibles</h3>
            
                <div class="row"">
                    @component ('layouts._components.cardno')
                    @slot('imagen', asset('assets/img/casa1.webp'))
                    @slot('titulo', 'Casa 7840')
                    @slot('contenido', 'Disponible ahora') 
                    @endcomponent

                    @component ('layouts._components.cardno')
                    @slot('imagen', asset('assets/img/casa2.jpg'))
                    @slot('titulo', 'Casa 7536')
                    @slot('contenido', 'Disponible dentro de 3 días')
                    @endcomponent

                    @component ('layouts._components.cardno')
                    @slot('imagen', asset('assets/img/casa3.webp'))
                    @slot('titulo', 'Casa 9654')
                    @slot('contenido', 'Disponible dentro de 7 días')
                    @endcomponent
                    
                </div>
            
        </div>
@endsection
