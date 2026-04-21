@extends('layouts.landing_admin')
@section('title', 'Panel de Administrador')
@section('content')
<div id="wrapper"> 
    @include('layouts._partials.admin_sidebar')

    <div id="main-wrapper"> 
    @include('layouts._partials.admin_header')

        <div class="container-fluid px-4">
            

            <h1>Generar una nueva reserva</h1>
            <a href="{{ route('admin.reservation') }}"class="btn btn-primary mb-3">Regresar</a>
            <form method = "POST" action = "{{ route('reservations.store') }}">
            @csrf

            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control">

            <label>Numero de identificacion</label>
            <input type="text" name="identidad" class="form-control">
            
            <label>Telefono</label>
            <input type="text" name="telefono" class="form-control"/>

            <label>Fecha inicial</label>
            <input type="date" name="fecha_inicial" class="form-control"/>

            <label>Fecha final</label>
            <input type="date" name="fecha_final" class="form-control"/>

            <label>Servicios</label>
            <input type="text" name="servicios" class="form-control">

            <label>Costo</label>
            <input type="decimal" name="costo" class="form-control">

            <input type="submit" value="Generar" class="btn btn-success mt-3"/>

            </form>

        </div>

    </div>
</div>
@endsection
