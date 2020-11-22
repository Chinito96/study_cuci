@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
    @foreach ($restaurantes as $restaurante)
        <div class="col-4">
            <a href="{{url('restaurantes/'.$restaurante->id)}}">
                <img class="icon-rounded bg-primary-light mb-3" src="{{asset('img/casas/'.$restaurante->imagen)}}" alt="">
            </a>
            <h3 class="h5">{{$restaurante->descripcion}}</h3>
            <p class="text-muted">${{$restaurante->precio}}</p>
        </div>
    @endforeach
    </div>
</div>
@endsection