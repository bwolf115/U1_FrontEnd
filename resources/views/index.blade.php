@extends('layouts.landing')
@section('title', 'Usuarios')
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

<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
      <h1>La estancia que necesitas</h1>
      <p>Explora nuestros lugares y servicios.</p>
      <a href="{{ route('agenda') }}" class="btn btn-primary">Agenda ahora</a>
    </div>
    <div class="col-md-6">
      <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/casa1.webp" alt="Imagen del lugar" class="rounded d-block " style="width:100% ">
    </div>
    <div class="carousel-item">
      <img src="assets/img/casa2.jpg" alt="Imagen del lugar" class="rounded d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="assets/img/casa3.webp" alt="Imagen del lugar" class="rounded d-block" style="width:100%">
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
  
</div>
</div>
</div>
</div>



@endsection