<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">

        <button class="btn text-white p-0 me-2" type="button">
            <i class="bi bi-bell-fill fs-5"></i>
        </button>

        <button class="navbar-toggler" type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#collapsibleNavbar"
                aria-controls="collapsibleNavbar" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">

            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Tienes notificaciones pendientes</a>
                </li>
            </ul>

            <!-- <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"> Salir <i class="bi bi-box-arrow-right"></i> 
                </a>

                </li>
            </ul> -->

            <form method="POST" action="{{ route('logout') }}">
            @csrf

            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                    Salir <i class="bi bi-box-arrow-right"></i> </a>
                </li>
            </ul>
            </form>

        </div>
    </div>
</nav>