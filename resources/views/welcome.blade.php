@extends('layouts.app')
@section('content')
<section class="hero-home" style="background-image: url('{{ asset('img/bg/cuci11.jpg') }}');">
    <div class="py-6 py-md-7 text-white z-index-20 container">
        <div class="row">
            <div class="col-xl-10">
                <div class="text-center text-lg-left">
                    <p class="subtitle letter-spacing-4 mb-2 text-secondary text-shadow">Tu experiencia universitaria</p>
                    <h1 class="display-3 font-weight-bold text-shadow">Disfruta como local</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="text-center pb-lg-4">
        <p class="subtitle text-secondary">Todo en un solo lugar</p>
        <h2 class="mb-5">Los mejores lugares cerca de tu Universidad</h2>
    </div>
    <div class="row">
        <div class="mb-3 mb-lg-0 text-center col-lg-4">
            <div class="icon-rounded bg-primary-light mb-3"><i class="fas fa-home"></i></div>
            <h3 class="h5">Encuentra tu hogar ideal</h3>
            <p class="text-muted">Si eres foráneo, encuentra una casa o habitación a tus necesidades y presupuesto
            </p>
        </div>
        <div class="mb-3 mb-lg-0 text-center col-lg-4">
            <div class="icon-rounded bg-primary-light mb-3"><i class="fas fa-store"></i></div>
            <h3 class="h5">Apoya el comercio local</h3>
            <p class="text-muted">Los mejores lugares para comer a los al rededores del campus</p>
        </div>
        <div class="mb-3 mb-lg-0 text-center col-lg-4">
            <div class="icon-rounded bg-primary-light mb-3"><i class="fas fa-campground"></i></div>
            <h3 class="h5">Actividades únicas</h3>
            <p class="text-muted">Explora las diversas actividades que puedes realizar cerca de tu universidad</p>
        </div>
    </div>
</div>
<section class="py-6">
    <div class="container">
        <div class="mb-5 row">
            <div class="col-md-8">
                <p class="subtitle text-primary">Disfruta y come como local</p>
                <h2>Nuestras recomendaciones</h2>
            </div>
        </div>
        <div class="swiper-container guides-slider mx-n2 pt-3 pb-5">
            <div class="swiper-wrapper">
                @foreach ($restaurantes as $place) 
                <div class="swiper-slide">
                    <div class="card-poster gradient-overlay hover-animate mb-4 mb-lg-0 card">
                        <a href="{{url('restaurantes/'.$place->id)}}" class="tile-link"></a>
                        <img src="{{asset('img/food/'.$place->imagen)}}" alt="Card image" class="bg-image">
                        <div class="card-body overlay-content">
                            <h6 class="card-title text-shadow text-uppercase">{{$place->lugar}}</h6>
                            <p class="card-text text-sm">{{$place->horario}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<a href="https://api.whatsapp.com/send?phone=523330728994&text=Hola!%20Me%20gustar%C3%ADa%20mas%20informaci%C3%B3n" 
    class="float text-decoration-none" style="color: #fff" target="_blank">
    <i class="fab fa-whatsapp my-float"></i>
    </a>
@endsection
@section('footer-scripts')
<script>
    $('#main-frame').removeClass('content-margin');
    $('#main-frame').addClass('content-margin-header');
    $('.hero-home').addClass('content-margin-header mb-5 pb-5');
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
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
