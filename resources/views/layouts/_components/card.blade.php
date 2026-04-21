<div class="col-md-3"">
    <div class="card" style="width: 18rem;">
        <img  class="img-fluid" src="{{ $imagen }}" alt="Foto de la tarjeta" style="max-width:400px ; height:200px;">
        <div class="card-body" >
            <h5 class="card-title">{{$titulo}}</h5>
            <p class="card-text">{{$contenido}}</p>
            <form action="{{ route('admin.reservation') }}" method="GET">
            <button class="btn btn-primary">Revisar</button>
            </form>
        </div>
    </div>
</div>  
