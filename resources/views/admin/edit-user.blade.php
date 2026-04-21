@extends('layouts.landing_admin')
@section('title', 'Panel de Administrador')
@section('content')
<div id="wrapper"> 
    @include('layouts._partials.admin_sidebar')

    <div id="main-wrapper"> 
    @include('layouts._partials.admin_header')

    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    <h4 class="mb-0">Editar Usuario: {{ $user->name }}</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.users.update', $user) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}" required>
                            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}" required>
                            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Rol</label>
                            <select name="role" class="form-select" required>
                                <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>Usuario Estándar</option>
                                <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Administrador</option>
                            </select>
                        </div>

                        <hr>
                        <p class="text-muted small">Deja la contraseña en blanco si no deseas cambiarla.</p>

                        <div class="mb-3">
                            <label class="form-label">Nueva Contraseña</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                            @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Confirmar Nueva Contraseña</label>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.colaboradores') }}" class="btn btn-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>

</div>
@endsection