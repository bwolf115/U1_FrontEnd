@extends('layouts.landing_admin')
@section('title', 'Reservas')
@section('content')
<div class="d-flex" id="wrapper"> 
    @include('layouts._partials.admin_sidebar')

    <div id="main-wrapper"> 
        @include('layouts._partials.admin_header')

        <div class="container-fluid p-4">
            
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="section-title mb-0">Reservaciones</h3>
                <a href="{{ route('reservations.create') }}" class="btn btn-primary">Nueva Reserva</a>
            </div>

            <div class="card shadow-sm border-0">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Identidad</th>
                                    <th>Telefono</th>
                                    <th>Fecha Inicial</th>
                                    <th>Fecha Final</th>
                                    <th>Servicios</th>
                                    <th>Costo</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reservations as $reservation)
                                <tr>
                                    <td>{{ $reservation->nombre }}</td>
                                    <td>{{ $reservation->identidad }}</td>
                                    <td>{{ $reservation->telefono }}</td>
                                    <td>{{ $reservation->fecha_inicial }}</td>
                                    <td>{{ $reservation->fecha_final }}</td>
                                    <td>{{ $reservation->servicios }}</td>
                                    <td>${{ number_format($reservation->costo, 2) }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            
                                            <a href="{{ route('reservations.edit', $reservation->id) }}" class="btn btn-sm btn-outline-secondary" title="Editar">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            
                                            <form method="POST" action="{{ route('reservations.destroy', $reservation->id) }}" class="m-0">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-outline-danger" title="Eliminar" onclick="return confirm('¿Estás seguro de que deseas eliminar esta reserva?')">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>

                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection