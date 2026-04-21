<div id="sidebar-wrapper">

  <div class="p-4 border-bottom text-white fw-bold text-center">
    <img src='assets/img/descarga.png' alt='Foto de perfil' 
    class='img-fluid rounded-circle mb-2' style="width: 60px; height: 60px; object-fit: cover;">
    <p class="mb-0 mt-2">Bienvenido</p> 
  </div>

    <ul class="nav flex-column mt-4 ">

      <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard <i class="bi bi-house"> </i></a>
      </li>

      <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.reservation') }}">Reservas <i class="bi bi-calendar-week"></i> </a>
      </li>

      <li class="nav-item">
      <a class="nav-link" href="#">Clientes <i class="bi bi-person-fill-gear"></i> </a>
      </li>

      <li class="nav-item">
      <a class="nav-link" href="#">Finanzas <i class="bi bi-piggy-bank"></i> </a>
      </li>
      
      <li class="nav-item">
      <a class="nav-link" href="#">Reportes <i class="bi bi-file-earmark-bar-graph"></i> </a>
      </li>

      <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.colaboradores') }}">Colaboradores <i class="bi bi-person-fill-lock"></i> </a>
      </li>

    </ul>

</div>