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
                <button type="button" class="btn btn-sm btn-outline-secondary">Llamar <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
                  </svg></button>
                
                <button type="button" class="btn btn-sm btn-outline-secondary">Me interesa</main></button>
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