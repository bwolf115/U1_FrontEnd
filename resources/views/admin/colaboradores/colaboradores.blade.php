@extends('layouts.landing_admin')
@section('title', 'Panel de Administrador')
@section('content')
<div id="wrapper"> 
    @include('layouts._partials.admin_sidebar')

    <div id="main-wrapper"> 
    @include('layouts._partials.admin_header')

    @if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
    {{ session('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

   <div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-white">
            <ul class="nav nav-tabs card-header-tabs" id="userTabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link {{ $activeTab === 'lista' ? 'active' : '' }}" 
                       href="{{ route('admin.colaboradores', ['tab' => 'lista']) }}">
                       Ver Lista de Usuarios
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $activeTab === 'registro' ? 'active' : '' }}" 
                       href="{{ route('admin.colaboradores', ['tab' => 'registro']) }}">
                       Registrar Nuevo Usuario
                    </a>
                </li>
            </ul>
        </div>
        
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="tab-content">
                @if($activeTab === 'lista')
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Rol</th>
                                    <th class="text-end">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <span class="badge {{ $user->role === 'admin' ? 'bg-danger' : 'bg-primary' }}">
                                                {{ ucfirst($user->role) }}
                                            </span>
                                        </td>
                                        <td class="text-end">
                                            
                                            <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm btn-outline-warning">Editar</a>
                                            <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Eliminar usuario?')">
                                                @csrf @method('DELETE')
                                                <button class="btn btn-sm btn-outline-danger">Eliminar</button>
                                                
                                            </form>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
                

                @if($activeTab === 'registro')
                    <div class="row justify-content-center py-4">
                        <div class="col-md-8">
                            <form method="POST" action="{{ route('admin.users.store') }}">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Nombre</label>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                                        @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Correo Electrónico</label>
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                                        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Rol del Sistema</label>
                                    <select name="role" class="form-select @error('role') is-invalid @enderror" required>
                                        <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>Usuario Estándar</option>
                                        <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Administrador</option>
                                    </select>
                                    @error('role')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Contraseña</label>
                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                                        @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Confirmar Contraseña</label>
                                        <input type="password" name="password_confirmation" class="form-control" required>
                                    </div>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Registrar Colaborador</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

</div>
@endsection
