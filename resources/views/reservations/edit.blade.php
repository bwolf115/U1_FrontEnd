@extends('layouts.landing_admin')
@section('title', 'Panel de Administrador')
@section('content')
<div id="wrapper"> 
    @include('layouts._partials.admin_sidebar')

    <div id="main-wrapper"> 
    @include('layouts._partials.admin_header')

        <div class="container-fluid px-4">

            <h1>Editar reserva</h1>
            <a href="{{ route('admin.reservation') }}"class="btn btn-primary mb-3">Regresar</a>
            <form method = "POST" action = "{{ route('reservations.update', $reservation->id) }}">
            @method('PUT')
            @csrf

            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $reservation->nombre }}">

            <label>Numero de identificacion</label>
            <input type="text" name="identidad" class="form-control" value="{{ $reservation->identidad }}">
            
            <label>Telefono</label>
            <input type="text" name="telefono" class="form-control" value="{{ $reservation->telefono }}">

            <label>Fecha inicial</label>
            <input type="date" name="fecha_inicial" class="form-control" value="{{ $reservation->fecha_inicial }}">

            <label>Fecha final</label>
            <input type="date" name="fecha_final" class="form-control" value="{{ $reservation->fecha_final }}">

            <label>Servicios</label>
            <input type="text" name="servicios" class="form-control" value="{{ $reservation->servicios }}">

            <label>Costo</label>
            <input type="decimal" name="costo" class="form-control" value="{{ $reservation->costo }}">

            <input type="submit" value="Confirmar edicion" class="btn btn-success mt-3"/>

            </form>

        </div>

    </div>
</div>
@endsection
