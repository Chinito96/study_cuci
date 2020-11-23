@extends('layouts.app')
@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    @if (session()->get('success'))
    <div class="alert alert-success" role="alert">
        {{ session()->get('success') }}
    </div>
    @endif
    @if (session()->get('error'))
    <div class="alert alert-danger" role="alert">
        {{ session()->get('error') }}
    </div>
    @endif
    <div class="row">
    @php
        $room = 0;
    @endphp
    @foreach ($habitaciones as $habitacion)
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <div data-toggle="modal" data-target="#galleryModal">
          <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{asset('img/casas/'.$habitacion->imagen)}}" alt="" data-target="#carouselGallery" data-slide-to="{{$room}}"/>
        </div>
        <div class="card-body">
          <p class="card-text">{{$habitacion->descripcion}}</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <button data-room="{{$habitacion->id}}" data-address="{{$habitacion->domicilio}}" class="appointment btn btn-sm btn-outline-success">Quiero una cita</button>
            </div>
            <span @if ($habitacion->genero == "Femenino")
            class="badge badge-danger text-center"
            @elseif ($habitacion->genero == "Masculino")
            class="badge badge-primary text-center"    
            @else
            class="badge badge-secondary text-center"
            @endif>
              {{$habitacion->genero}}
            </span>
            <small class="text-muted">${{$habitacion->precio}}</small>
          </div>
        </div>
      </div>
    </div>
    @php
        $room = $room + 1;
    @endphp
    @endforeach
    </div>
</div>

<!-- Gallery -->
<div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="galleryModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <!-- Carousel -->
        <div id="carouselGallery" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            @php
                $count = 0;
            @endphp
          @foreach ($habitaciones as $habitacion)
            @if ($count == 0)
            <div class="carousel-item active">    
            @else
            <div class="carousel-item">    
            @endif
              <img class="d-block w-100" src="{{asset('img/casas/'.$habitacion->imagen)}}" alt="">
            </div>
            @php
            $count = $count + 1;
            @endphp
          @endforeach
          </div>

          <a class="carousel-control-prev" href="#carouselGallery" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselGallery" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
          </a>

        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
</div>
@include('modals.room')
@endsection
@section('footer-scripts')
<script>
$(document).ready(function(){

  $('.appointment').click(function() {
    let id = $(this).data("room");
    let address = $(this).data("address");
    $('#room_id').val(id);
    $('#room_address').text(address);
    $('#room-event').modal('show');
  });

})
</script>
@endsection