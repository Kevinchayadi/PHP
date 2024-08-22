@extends('Template.main')

@section('tittle', 'Contact-Us')

@section('content')
@include('Template.headers', ['temp' => 'about Us'])

<div class="contact thanks p-5 ">
    <div class="container-fluid">
        <div class="align-items-center  row main-layout  px-3">
            <div class="text-center d-flex flex-column justify-content-center  same-height pt-3 ">
                <h3 class="gradient-text">Terima Kasih Telah Menghubungi Kami</h3>
                <p>kami akan menghubungimu secepatnya!</p>
                <div>
                    <a href="/home" class="btn-cust">Kembali ke halaman utama</a>
                </div>
            </div>
        </div> 
    
    </div>
</div>




@endsection