@extends('layouts.landing_login')

@section('title', 'Inicio de Sesión')

@section('content')
<div class="d-flex align-items-center min-vh-100 "> 
    <div class="container">

        <div class="row shadow-lg rounded-4 bg-white"> 

            <div class="col-md-5 p-5 bg-dark text-white justify-content-center text-center text-md-center">
                <h1>Bienvenido</h1> 
                <p class="mt-3 text-white-50">Lorem ipsum dolor</p>
                </div>

                <div class="col-md-7 d-flex justify-content-center align-items-center p-5">
                <div class="w-100" style="max-width: 400px;">
                <h3 class="text-center mb-4">Iniciar Sesión</h3>

                <form action="{{ route('login') }}" method="POST">

                    @csrf
                    <div class="mb-3">
                    <label for="email" :value="__('Email')" class="form-label">Correo electrónico </label>
                   <input type="email" id="email" class="form-control" name="email" required autofocus>
                   <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mb-4"> 
                    <label for="password" :value="__('Password')" class="form-label">Contraseña</label>
                    <input type="password" id="password" class="form-control" name="password" required autocomplete="current-password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    
                    <button type="submit" class="btn btn-primary w-100 py-2">Ingresar</button>  
                      
                            
                </form>

                <div>
                    <form action="{{ route('register') }}" method="GET">
                    <label for="Registrarse" class="form-label">Si no tienes una cuenta registate</label>    
                    <button type="submit" class="btn btn-secondary w-100 py-2">Registrarse</button>   
                    </form>
                </div>
            </div>
        </div>

        </div>
    </div>
</div>
@endsection