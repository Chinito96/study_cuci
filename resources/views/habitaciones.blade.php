@extends('layouts.app')
@section('content')
<div class="container">
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
              <button data-room="{{$habitacion->id}}" class="appointment btn btn-sm btn-outline-success">Quiero una cita</button>
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
    let url = 'habitaciones/'+id;
    $.get(url, function (data) {
        $('#room-form').attr('action', url);
        $('.nameNg').val(data.name);
        $('.email').val(data.email);
        $('.idNgssol').val(data.idNgssol);
        $('.department').val(data.department);
        $('.role').val(data.role);
        $('.bday').val(data.birthday);
        $('.anniversary').val(data.anniversary);
        $('#room-event').modal('show');
    })
  });

})
</script>
@endsection