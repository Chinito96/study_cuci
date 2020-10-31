<header>
    <nav class="shadow navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container-fluid">
            <div class="d-flex align-items-center">
                <a class="py-1 navbar-brand" href="/">
                    <img src="{{asset('svg/escudo_udg.svg')}}" width="35px" height="50px" alt="CUCI logo">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="ml-auto navbar-nav">
                    <li class="dropdown nav-item">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inicio</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a href="/" tabindex="0" role="menuitem" class="dropdown-item">Habitaciones</a>
                            <a href="/" tabindex="0" role="menuitem" class="dropdown-item">Restaurantes</a>
                            <a href="/" tabindex="0" role="menuitem" class="dropdown-item">Viajar <span class="ml-1 mt-n1 badge badge-info">New</span></a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link">Contacto</a></li>
                    <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Iniciar Sesión</a></li>
                    <li class="nav-item"><a href="{{route('register')}}" class="nav-link">Registrarse</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
