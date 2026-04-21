@extends('layouts.landing_admin')
@section('title', 'Panel de Administrador')
@section('content')
<div id="wrapper"> 
    @include('layouts._partials.admin_sidebar')

    <div id="main-wrapper"> 
    @include('layouts._partials.admin_header')

        <div class="container-fluid px-4">

            <h3  class="card_title" >Reservaciones</h3>
            
                <div class="row">    
                    @component ('layouts._components.card')
                    @slot('imagen', asset('assets/img/casa1.webp'))
                    @slot('titulo', 'Casa 7840')
                    @slot('contenido', 'Vencimiento: 12/12/2024') 
                    @endcomponent

                    @component ('layouts._components.card')
                    @slot('imagen', asset('assets/img/casa2.jpg'))
                    @slot('titulo', 'Casa 7536')
                    @slot('contenido', 'Comienza: 12/12/2024')
                    @endcomponent

                    @component ('layouts._components.card')
                    @slot('imagen', asset('assets/img/casa3.webp'))
                    @slot('titulo', 'Casa 9654')
                    @slot('contenido', 'Vencimiento: 12/12/2024')
                    @endcomponent
                    
                </div>
            
        </div>

        <div class="container-fluid px-4">

            <h3 class="card_title" >Movimientos</h3>
           
                <div class="row">    
                    @component ('layouts._components.transaction')
                    @slot('color', '#23720d')
                    @slot('contenido', '+$8,000 MXN Casa 7840') 
                    @endcomponent

                    @component ('layouts._components.transaction')
                    @slot('color', '#ff0000')
                    @slot('contenido', '-3,000 MXN Servicio de Agua') 
                    @endcomponent
                    
                </div>
           
        </div>

        <div class="container-fluid px-4">

            <h3 class="card_title" >Estadísticas</h3>
            
                <div class="row">    
                    @component ('layouts._components.card')
                    @slot('imagen', asset('assets/img/chart.png'))
                    @slot('titulo', 'AQUI TENDRIA UN CHART')
                    @slot('contenido', '') 
                    @endcomponent
                    
                </div>
         
        </div>

        
    </div>
</div>
@endsection
