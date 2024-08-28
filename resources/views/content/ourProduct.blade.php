@extends('Template.main')

@section('meta-description', 'kami memiliki kebun pisang Cavendish yang luas, di mana setiap tanaman dirawat dengan cermat untuk
                        memastikan produksi buah yang besar, manis, dan bebas dari penyakit. Dengan memanfaatkan teknik
                        pertanian modern dan berkelanjutan, kami mampu memenuhi permintaan pisang berkualitas premium baik
                        untuk pasar lokal maupun ekspor.')

@section('meta-keywords', 'PT Parung Hijau Perkasa,Parung Hijau Perkasa, Parung Hijau, parung hijau perkasa, pertanian berkelanjutan, peternakan ayam kampung, budidaya ikan patin, pengelolaan sampah organik, pisang Cavendish, Bogor, Jawa Barat, ekonomi lokal, sungrow banana, adiluhung, produk adiluhung')

@section('og-title', 'Tentang Kami - PT. Parung Hijau Perkasa')
@section('og-description', 'PT Parung Hijau Perkasa berdedikasi untuk berkontribusi pada ekonomi lokal dan menjaga lingkungan melalui praktik pertanian, peternakan, dan pengelolaan sampah yang berkelanjutan.')
@section('og-url', url('https://parunghijauperkasa.com/our-product'))
@section('og-type', 'website')
@section('og-image', url('path-to-your-image/about-us.jpg'))

@section('twitter-title', 'Tentang Kami - PT. Parung Hijau Perkasa')
@section('twitter-description', 'Kenali lebih jauh tentang PT Parung Hijau Perkasa, perusahaan di Bogor yang berkomitmen pada keberlanjutan dan kesejahteraan masyarakat melalui pertanian dan pengelolaan sumber daya.')
@section('twitter-url', url('https://parunghijauperkasa.com/our-product'))
@section('twitter:image', url('path-to-your-image/about-us.jpg'))

@section('tittle', 'Produk-Kami')

@section('content')
    @include('Template.headers', ['temp' => 'Produk Kami'])

    <div class="OurProduct">
        <div class="container-fluid">
            <div class="row align-items-center p-5 bg-ganjil">
                <div class="col-12 col-lg-4 col-md-6 align-items-center" data-aos="fade-right" data-aos-delay="550">
                    <img src="{{ asset("../Img/pisang1.jpg") }}" class="img-fluid" alt="Gambar 1">
                </div>
                <div class="col-12 col-lg-8 col-md-6" data-aos="fade-left" data-aos-delay="550">
                    <h2 >Sungrow</h2>
                    <p>kami memiliki kebun pisang Cavendish yang luas, di mana setiap tanaman dirawat dengan cermat untuk
                        memastikan produksi buah yang besar, manis, dan bebas dari penyakit. Dengan memanfaatkan teknik
                        pertanian modern dan berkelanjutan, kami mampu memenuhi permintaan pisang berkualitas premium baik
                        untuk pasar lokal maupun ekspor. Pisang Cavendish kami dikenal karena kualitasnya yang unggul dan
                        nilai gizinya yang tinggi.</p>
                        <a href="https://www.sungrow.co.id/our-product" class="mt-auto btn-cust">Detail</a>
                </div>
            </div>

            <div class="row align-items-center p-5">
                <div class="col-12 col-lg-4 order-lg-2 col-md-6" data-aos="fade-left">
                    <img src="{{ asset("../Img/ayam1.jpg") }}" class="img-fluid" alt="Gambar 2">
                </div>
                <div class="col-12 col-lg-8 order-lg-1 col-md-6" data-aos="fade-right">
                    <h2>Adiluhung Chicken</h2>
                    <p>Perusahaan kami mengelola peternakan ayam yang berfokus pada produksi daging dan telur berkualitas
                        tinggi. Dengan menerapkan teknologi modern dan praktik terbaik dalam peternakan, kami memastikan
                        bahwa setiap ayam dipelihara dalam lingkungan yang sehat dan bersih. Tujuan kami adalah menyediakan
                        sumber protein yang aman dan bergizi untuk memenuhi kebutuhan konsumen, baik di pasar domestik
                        maupun internasional.</p>
                        <a href="/ayam" class="mt-auto btn-cust">Detail</a>
                </div>
            </div>

            <div class="row align-items-center p-5 bg-ganjil">
                <div class="col-12 col-lg-4 col-md-6 align-items-center" data-aos="fade-right">
                    <img src="{{ asset("../Img/ikan.png") }}" class="img-fluid" alt="Gambar 1">
                </div>
                <div class="col-12 col-lg-8 col-md-6" data-aos="fade-left">
                    <h2>Adiluhung Patin</h2>
                    <p>Kami juga mengoperasikan budidaya ikan patin yang dirancang untuk menghasilkan ikan dengan daging
                        yang lembut dan berkualitas. Menggunakan sistem pemeliharaan yang ramah lingkungan dan
                        berkelanjutan, kami menjaga kualitas air dan pakan ikan agar menghasilkan patin yang sehat. Produk
                        ikan patin kami terkenal dengan rasa yang lezat dan kaya nutrisi, cocok untuk berbagai olahan
                        makanan.</p>
                    <a href="/our-product" class="mt-auto btn-cust">Detail</a>
                </div>
            </div>

            <div class="row align-items-center p-5" >
                <div class="col-12 col-lg-4 order-lg-2 col-md-6" data-aos="fade-left">
                    <img src="{{ asset("../Img/waste1.png") }}" class="img-fluid" alt="Gambar 2">
                </div>
                <div class="col-12 col-lg-8 order-lg-1 col-md-6" data-aos="fade-right">
                    <h2>Wasted Management</h2>
                    <p>Kami mengelola limbah organik dari Restauran untuk diolah menjadi pupuk,
                        pakan ternak dan bahan bakar.</p>
                </div>
            </div>
        </div>
    </div>




@endsection
