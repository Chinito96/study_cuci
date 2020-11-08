@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
    @foreach ($habitaciones as $habitacion)
        <div class="col-4">
            <a href="{{url('habitaciones/'.$habitacion->id)}}">
                <img class="icon-rounded bg-primary-light mb-3" src="{{asset('img/casas/'.$habitacion->imagen)}}" alt="">
            </a>
            <h3 class="h5">{{$habitacion->descripcion}}</h3>
            <p class="text-muted">${{$habitacion->precio}}</p>
        </div>
    @endforeach
    </div>
</div>
@endsection