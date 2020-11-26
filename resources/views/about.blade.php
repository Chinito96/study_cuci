@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <h2>- Conoce al equipo de STUDY CUCI -</h2>
        </div>
        <div class="col-12 text-center">
            <br>
            <p>Somos un grupo de estudiantes del Centro Universitario de la Cienega, como foráneos sabemos lo difícil que puede ser en un 
                inicio encontrar un lugar para vivir cuando recien comienza el ciclo escolar. Es por eso que hemos creado Study CUCI como un 
                sitio donde los alumnos del centro pueden buscar habitaciones, restaurantes e informes sobre las actividades recreativas 
                cerca de la Universidad.
            </p>
            <h5>Esperamos poder ayudarte!</h5>
            <a href="{{route('contact')}}" class="btn btn-outline-secondary">Contáctanos</a>
        </div>
    </div>
</div>
<section class="divider-full-width my-5"></section>
<div class="container">
    <div class="row justify-content-center">
        <div class="user col-4">
            <div class="user_image">
                <img src="{{asset('/img/profiles/chave.jpeg')}}" alt="" title="" media-simple="true">
            </div>
            <div class="user_text pb-3">
                <p class="mbr-fonts-style display-7 text-center">
                    Estudiante de Ingeniería en Informática. Encargada de la programación y lógica del sitio.
                </p>
            </div>
            <div class="user_name font-weight-bold pb-2 mbr-fonts-style display-7 text-center">
                Frida Ocampo
            </div>
            <div class="user_desk font-weight-light mbr-fonts-style display-7 text-center">
                PROGRAMADOR
            </div>
        </div>
        <div class="user col-4">
            <div class="user_image">
                <img src="{{asset('/img/profiles/david.jpeg')}}" alt="" title="" media-simple="true">
            </div>
            <div class="user_text pb-3">
                <p class="mbr-fonts-style display-7 text-center">
                    Estudiante de Ingeniería en Computación. Encargado de realizar las pruebas y test 
                    de la plataforma.
                </p>
            </div>
            <div class="user_name font-weight-bold pb-2 mbr-fonts-style display-7 text-center">
                David Aviña
            </div>
            <div class="user_desk font-weight-light mbr-fonts-style display-7 text-center">
                TESTER
            </div>
        </div>
        <div class="user col-4">
            <div class="user_image">
                <img src="{{asset('/img/profiles/more.jpeg')}}" alt="" title="" media-simple="true">
            </div>
            <div class="user_text pb-3">
                <p class="mbr-fonts-style display-7 text-center">
                    Estudiante de Ingeniería en Computación. Encargado del diseño de la página.
                </p>
            </div>
            <div class="user_name font-weight-bold pb-2 mbr-fonts-style display-7 text-center">
                Juan Moreno
            </div>
            <div class="user_desk font-weight-light mbr-fonts-style display-7 text-center">
                DISEÑADOR
            </div>
        </div>
    </div>
</div>
@endsection