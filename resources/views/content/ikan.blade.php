@extends('Template.main')

@section('tittle', 'Detail-Ayam')

@section('content')
@include('Template.headers', ['temp' => 'Adiluhung Chicken'])

<div class="ayam p-5">
    <div class="container-fluid ">
        <div class="ikan-image d-flex justify-content-center align-content-center">
            <img src="{{ asset('../Img/ikan.png') }}" alt="" class="img-fluid mb-2" style="flex: 1; max-width: 80%" data-aos="fade-down-right" data-aos-delay="550">

        </div>
        <div class="my-4" >
            <p  data-aos="fade-up">Adiluhung Ikan Patin adalah varietas unggul dari ikan patin yang dikenal dengan kualitas dagingnya yang lembut, gurih, dan kaya akan nutrisi. Ikan ini dibudidayakan dengan standar tinggi di perairan yang bersih dan alami, menjadikannya pilihan ideal bagi konsumen yang mengutamakan kesehatan dan cita rasa. Adiluhung Ikan Patin tidak hanya lezat, tetapi juga mengandung asam lemak omega-3 dan protein tinggi, yang sangat baik untuk kesehatan jantung dan otak. Dengan tekstur daging yang halus, ikan ini mudah diolah dalam berbagai masakan, mulai dari sup, panggang, hingga goreng.</p>
            <p data-aos="fade-up"> Dapatkan Adiluhung Ikan Patin, pilihan tepat untuk sajian istimewa di meja makan Anda! Nikmati kelezatan alami ikan patin berkualitas premium yang hadir langsung dari perairan terbaik ke dapur Anda. Kami menawarkan produk ikan patin segar dengan harga terjangkau dan pengiriman cepat. Segera pesan sekarang dan rasakan manfaat kesehatan serta kelezatan yang luar biasa dari Adiluhung Ikan Patin.</p>
        </div>

    </div>
</div>




@endsection