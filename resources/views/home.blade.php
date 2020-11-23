@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Study Cuci') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                <div class="jumbotron">
                    @endif
                    <h1 class="display-7"> {{ Auth::user()->name }}. Hola! sabemos lo que necesitas!</h1>
                    <p class="lead">Aqui encontraras ayuda para encontrar desde Casas, Habitaciones o lugares donde comer.</p>
                    <hr class="my-4">
                    <a href="{{url('habitaciones')}}" class="btn btn-primary btn-lg btn-block">Habitaciones</a>
                    <a href="{{url('restaurantes')}}" class="btn btn-primary btn-lg btn-block">Restaurantes</a>
                    
                    </p>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
