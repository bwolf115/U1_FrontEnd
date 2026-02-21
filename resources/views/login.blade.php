@extends('layouts.landing_login')
@section('title', 'Inicio de Sesión')
@section('content')
<div class="d-flex" id="wrapper">  

    <div class="container p-5 my-5 bg-dark text-white" id="wrapper_izquierdo">
  <h1>Bienvendio</h1>
  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
</div>

    <div id="main-wrapper"> 
        
    
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card p-4" style="width: 400px;">
        <h3 class="card-title text-center mb-4">Iniciar Sesión</h3>
        <form>
            
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" required autofocus>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Ingresar</button>
        </form>
    </div>

    </div>
</div>
@endsection