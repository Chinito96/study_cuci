@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
    @foreach ($habitaciones as $habitacion)
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img class="icon-rounded bg-primary-light mb-3" src="{{asset('img/casas/'.$habitacion->imagen)}}" alt="">
          <a href="{{url('Habitaciones/'.$habitacion->id)}}">
           
        </a>
        <h3 class="h5">{{$habitacion->descripcion}}</h3>
        <p class="text-muted">${{$habitacion->precio}}</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Me interesa</button>
              </div>
              <small class="text-muted">9 mins</small>
            </div>
          </div>
        </div>
      </div>
    @endforeach
    </div>
</div>
@endsection