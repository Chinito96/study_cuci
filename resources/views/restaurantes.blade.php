@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <p><a class="text-bold" href="/">Welcome</a>/<a class="text-bold" href="{{url('home')}}">Home</a>/<span class="text-muted">Restaurantes</span></p>
            <small class="text-secondary">{{$place->horario}}</small>
            <h2>{{$place->lugar}}</h2>
            <small class="text-muted">De {{$place->nombre}}</small>
            <p>{{$place->servicio}}</p>
            <p>Disfruta de nuestro menu</p>
            <ul>
                @php
                $menu = '<li>'.str_replace("\n","</li><li>",trim($place->menu,"\n")).'</li>';
                echo $menu;
                @endphp
            </ul>
        </div>
        <div class="col-6">
            <img class="img-fluid my-4 py-4" src="{{asset('img/food/'.$place->imagen)}}" alt="{{$place->lugar}}">
            <h6><i class="fas fa-phone-square-alt"></i>Llama al {{$place->telefono}}</h6>
        </div>
    </div>
    <section class="py-6">
        <div class="container">
            <div class="mb-5 row">
                <div class="col-md-8">
                    <p class="subtitle text-primary">Disfruta de fantasticos lugares</p>
                    <h2>Más recomendaciones</h2>
                </div>
            </div>
            <div class="swiper-container guides-slider mx-n2 pt-3 pb-5">
                <div class="swiper-wrapper">
                    @foreach ($restaurantes as $food) 
                    <div class="swiper-slide">
                        <div class="card-poster gradient-overlay hover-animate mb-4 mb-lg-0 card">
                            <a href="{{url('restaurantes/'.$food->id)}}" class="tile-link"></a>
                            <img src="{{asset('img/food/'.$food->imagen)}}" alt="Card image" class="bg-image">
                            <div class="card-body overlay-content">
                                <h6 class="card-title text-shadow text-uppercase">{{$food->lugar}}</h6>
                                <p class="card-text text-sm">{{$food->horario}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('footer-scripts')
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 20,
        pagination: {
            el: '.swipper-pagination',
            clickable: true
        },
        direction: 'horizontal',
        loop: true
    });
</script>
@endsection