@extends('Template.main')

@section('tittle', 'Our-Product')

@section('content')
    @include('Template.headers', ['temp' => 'Our Product'])

    <div class="aboutus">
        <div class="container-fluid">
            <div class="row align-items-center p-5 bg-ganjil">
                <div class="col-12 col-lg-4 col-md-6 align-items-center">
                    <img src="gambar1.jpg" class="img-fluid" alt="Gambar 1">
                </div>
                <div class="col-12 col-lg-8 col-md-6" data-aos="fade-left">
                    <h2 data-aos="fade-left">Sungrow</h2>
                    <p>kami memiliki kebun pisang Cavendish yang luas, di mana setiap tanaman dirawat dengan cermat untuk
                        memastikan produksi buah yang besar, manis, dan bebas dari penyakit. Dengan memanfaatkan teknik
                        pertanian modern dan berkelanjutan, kami mampu memenuhi permintaan pisang berkualitas premium baik
                        untuk pasar lokal maupun ekspor. Pisang Cavendish kami dikenal karena kualitasnya yang unggul dan
                        nilai gizinya yang tinggi.</p>
                        <a href="https://www.sungrow.co.id/our-product" class="mt-auto btn-cust">Detail</a>
                </div>
            </div>

            <div class="row align-items-center p-5">
                <div class="col-12 col-lg-4 order-lg-2 col-md-6">
                    <img src="gambar2.jpg" class="img-fluid" alt="Gambar 2">
                </div>
                <div class="col-12 col-lg-8 order-lg-1 col-md-6" data-aos="fade-right">
                    <h2>Cidokom Chicken</h2>
                    <p>Perusahaan kami mengelola peternakan ayam yang berfokus pada produksi daging dan telur berkualitas
                        tinggi. Dengan menerapkan teknologi modern dan praktik terbaik dalam peternakan, kami memastikan
                        bahwa setiap ayam dipelihara dalam lingkungan yang sehat dan bersih. Tujuan kami adalah menyediakan
                        sumber protein yang aman dan bergizi untuk memenuhi kebutuhan konsumen, baik di pasar domestik
                        maupun internasional.</p>
                        <a href="/our-product" class="mt-auto btn-cust">Learn More</a>
                </div>
            </div>

            <div class="row align-items-center p-5 bg-ganjil">
                <div class="col-12 col-lg-4 col-md-6 align-items-center">
                    <img src="gambar1.jpg" class="img-fluid" alt="Gambar 1">
                </div>
                <div class="col-12 col-lg-8 col-md-6" data-aos="fade-left">
                    <h2>Patin</h2>
                    <p>Kami juga mengoperasikan budidaya ikan patin yang dirancang untuk menghasilkan ikan dengan daging
                        yang lembut dan berkualitas. Menggunakan sistem pemeliharaan yang ramah lingkungan dan
                        berkelanjutan, kami menjaga kualitas air dan pakan ikan agar menghasilkan patin yang sehat. Produk
                        ikan patin kami terkenal dengan rasa yang lezat dan kaya nutrisi, cocok untuk berbagai olahan
                        makanan.</p>
                    <a href="/our-product" class="mt-auto btn-cust">Learn More</a>
                </div>
            </div>

            <div class="row align-items-center p-5">
                <div class="col-12 col-lg-4 order-lg-2 col-md-6">
                    <img src="gambar2.jpg" class="img-fluid" alt="Gambar 2">
                </div>
                <div class="col-12 col-lg-8 order-lg-1 col-md-6">
                    <h2>Wasted Management</h2>
                    <p>Kami mengelola limbah organik dari Restauran untuk diolah menjadi pupuk,
                        pakan ternak dan bahan bakar.(Segera Hadir)</p>
                </div>
            </div>
        </div>
    </div>




@endsection
