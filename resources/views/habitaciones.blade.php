@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
    @foreach ($habitaciones ?? '' as $habitacion)
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{asset('img/casas/'.$habitacion->imagen)}}" alt="" />
        <div class="card-body">
          <p class="card-text">{{$habitacion->descripcion}}</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group" data-toggle="modal" data-target="#galleryModal">
              <a href="#" data-target="#carouselGallery" class="btn btn-sm btn-outline-secondary">Ver</a>
              <a href="{{url('habitaciones/'.$habitacion->id)}}" class="btn btn-sm btn-outline-secondary">Detalles</a>
            </div>
            <small class="text-muted">${{$habitacion->precio}}</small>
          </div>
        </div>
      </div>
    </div>
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
          @foreach ($habitaciones ?? '' as $habitacion)
            <div class="item">
              <img class="d-block w-100" src="{{asset('img/casas/'.$habitacion->imagen)}}" alt="">
            </div>
          @endforeach
          </div>
          {{-- <a class="carousel-control-prev" href="#carouselGallery" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselGallery" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
          </a> --}}
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
@endsection
@section('footer-scripts')
<script>
$(function() {

});
</script>
@endsection