<header>
    <nav class="shadow navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container-fluid">
            <div class="d-flex align-items-center">
                <a class="py-1 navbar-brand" href="/">
                    <img src="{{asset('img/logo.png')}}" width="60px" height="50px" alt="CUCI logo">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="ml-auto navbar-nav">
                    @auth
                    <li class="dropdown nav-item">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inicio</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a href="{{url('habitaciones')}}" tabindex="0" role="menuitem" class="dropdown-item">Habitaciones</a>
                            <a href="{{url('restaurantes')}}" tabindex="0" role="menuitem" class="dropdown-item">Restaurantes</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contacto</a></li>
                    <li class="nav-item"><a href="{{route('about')}}" class="nav-link">Sobre nosotros</a></li>
                    @if (Auth::user()->role == "Admin")
                    <li class="nav-item"><a href="{{ url('appointments') }}" class="nav-link">Dashboard</a></li>  
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @else
                    <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contacto</a></li>
                    <li class="nav-item"><a href="{{route('about')}}" class="nav-link">Sobre nosotros</a></li>
                    <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Iniciar Sesión</a></li>
                    <li class="nav-item"><a href="{{route('register')}}" class="nav-link">Registrarse</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</header>
