@extends('layouts.app')
@section('head-code')
<style>
    main {
        background: #009bff;
        background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
        background: -o-linear-gradient(left, #0072ff, #00c6ff);
        background: -moz-linear-gradient(left, #0072ff, #00c6ff);
        background: linear-gradient(left, #0072ff, #00c6ff); 
    }
</style>
@endsection
@section('content')
<div class="contact1">
    @if (session()->get('success'))
    <div class="alert alert-success" role="alert">
        {{ session()->get('success') }}
    </div>
    @endif
    <div class="container-contact1">
        <div class="contact1-pic js-tilt" data-tilt=""
            style="transform: perspective(300px) rotateX(0deg) rotateY(0deg); will-change: transform;">
            <img src="{{ asset('img/img-01.png') }}" alt="IMG">
        </div>
        <form method="POST" action="{{url('contact-us')}}" class="contact1-form validate-form">
            @csrf
            <span class="contact1-form-title">
                Queremos escucharte
            </span>
            <div class="wrap-input1 validate-input" data-validate="Name is required">
                <input class="input1 form-control" type="text" name="name" placeholder="Nombre">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <span class="shadow-input1"></span>
            </div>
            <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                <input class="input1 form-control" type="text" name="email" placeholder="Correo">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <span class="shadow-input1"></span>
            </div>
            <div class="wrap-input1 validate-input" data-validate="Subject is required">
                <input class="input1 form-control" type="text" name="subject" placeholder="Asunto">
                @error('subject')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <span class="shadow-input1"></span>
            </div>
            <div class="wrap-input1 validate-input" data-validate="Message is required">
                <textarea class="input1 form-control" rows="4" cols="4" name="message" placeholder="Mensaje"></textarea>
                @error('message')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <span class="shadow-input1"></span>
            </div>
            <div class="container-contact1-form-btn">
                <button type="submit" class="contact1-form-btn btn btn-success">
                    <span>
                        Enviar Email
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
