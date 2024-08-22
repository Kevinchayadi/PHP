@extends('Template.main')

@section('tittle', 'Detail-Ayam')

@section('content')
@include('Template.headers', ['temp' => 'Detail-Ayam'])

<div class="Ayam p-5">
    <div class="container-fluid">
        <div class="row h-100">
            <div class="col-4  d-flex flex-column justify-content-between">
                <img src="{{ asset('../Img/ayam2.jpg') }}" alt="" class="img-fluid mb-2" style="flex: 1;">
                <img src="{{ asset('../Img/ayam2.jpg') }}" alt="" class="img-fluid" style="flex: 1;">
            </div>
            <div class="col-8  d-flex justify-content-center align-items-center">
                <img src="{{ asset('../Img/ayam2.jpg') }}" alt="" class="img-fluid" style="height: 100%;">
            </div>
        </div>
    
    </div>
</div>




@endsection