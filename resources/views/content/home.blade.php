@extends('Template.main')

@section('tittle', 'Beranda')

@section('content')
    {{-- <div class="hero ">
        <h1>Parung Hijau Pekasa</h1>
        <h2>Bersama Kita Mendaur Ulang, Bersama Kita Menginspirasi Perubahan!</h2>
    </div> --}}

    <section class="hero container-fluid ">
        <div class="hero">
            <video class="video-background " autoplay muted loop>
                <source
                    src="https://media.istockphoto.com/id/1044134410/id/video/pohon-hutan-hujan-tropis-kelahiran-awan.mp4?s=mp4-640x640-is&k=20&c=OIMprcSc1ToW5MMnBNOm0NNdyteI6NT8gduk9xF1xHs="
                    type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="overlay"></div>
            <div class="content d-flex flex-column align-content-center">
                <div class="text">
                    <h1>Selamat datang</h1>
                    <h1>di PT. Parung Hijau Perkasa</h1>
                    <p>Temukan solusi inovatif kami untuk peternakan unggul dan pengelolaan limbah yang berkelanjutan.</p>
                </div>
                <div class="icon">
                    <a href="" class="custom-icon" id="scrollLink">
                        <i class="bi bi-arrow-down-circle-fill"></i>
                    </a>
                </div>
                
            </div>
        </div>
    </section>
    
    <section id="whoweare" class="whoweare" data-aos="fade-up">
        <div class="container my-5 p-5 text-center border-bottom">
            <div class="col">
                <strong><h1>Tentang Kami</h1></strong>
                <p>
                    PT Parung Hijau Perkasa, yang berlokasi di Bogor, Jawa Barat, adalah perusahaan yang lahir dari semangat inovasi dan keberlanjutan. Didirikan pada 27 Maret 2020, perusahaan ini berkomitmen untuk berkontribusi pada peningkatan ekonomi lokal dan menjaga keseimbangan ekosistem melalui praktik pertanian, peternakan, perikanan, dan pengelolaan sampah yang ramah lingkungan.
                </p>
                <p>
                    Di tengah suburnya tanah Bogor, PT Parung Hijau Perkasa memanfaatkan potensi lokal dengan memberdayakan masyarakat setempat dan menerapkan teknologi modern yang berfokus pada keberlanjutan. Perusahaan ini bangga menjadi bagian dari komunitas yang dinamis dan turut serta dalam meningkatkan kesejahteraan ekonomi daerah serta menjaga kelestarian lingkungan untuk generasi mendatang.
                </p>
                <a href="/about" class="btn-cust">cari tahu lebih lanjut</a>
            </div>
        </div>
    </section>
    

    <section class="producthome">
        <div class="container-fluid d-flex text-center">
            <div class="product-homes">
                <div class="row mx-2 mb-5 ">
                    <h1 class="col-12" data-aos="fade-up">Our Product</h1>
                    <div class="col-12 col-lg-3 col-md-6 col-xs-12 my-3 d-flex justify-content-center card-product">
                        <div class="card card-style h-100" style="width: 18rem;">
                            <img src="{{ asset("../Img/pisang1.jpg") }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Sungrow</h5>
                                <p class="card-text">Perkebunan pisang Cavendish kami menghasilkan buah dengan kualitas premium,
                                    manis, dan kaya akan nutrisi. Dengan teknik pertanian modern, kami mampu memenuhi permintaan
                                    pasar lokal dan internasional..</p>
                                <a href="/our-product" class="mt-auto">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 col-xs-12 my-3 d-flex justify-content-center card-product">
                        <div class="card card-style h-100" style="width: 18rem;">
                            <img src="{{ asset("../Img/ayam1.jpg") }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Adiluhung Chicken</h5>
                                <p class="card-text">peternakan ayam kami menghasilkan daging dan telur berkualitas tinggi
                                    dengan menerapkan teknologi modern dan praktik terbaik. Kami berkomitmen untuk menyediakan
                                    produk unggas yang sehat dan bergizi bagi konsumen di seluruh pasar.</p>
                                <a href="/our-product" class="mt-auto">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 col-xs-12 my-3 d-flex justify-content-center card-product">
                        <div class="card card-style h-100" style="width: 18rem;">
                            <img src="{{ asset("../Img/ikan.png") }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Adiluhung Patin</h5>
                                <p class="card-text">kan patin kami berfokus pada produksi ikan dengan daging yang lembut dan
                                    kaya nutrisi. Kami menggunakan metode ramah lingkungan untuk memastikan hasil panen yang
                                    berkualitas dan berkelanjutan.</p>
                                <a href="/our-product" class="mt-auto">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 col-xs-12 my-3 d-flex justify-content-center card-product">
                        <div class="card card-style h-100" style="width: 18rem;">
                            <img src="{{ asset("../Img/waste1.png") }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Waste Management</h5>
                                <p class="card-text">Kami mengelola limbah organik dari Restauran untuk diolah menjadi pupuk,
                                    pakan ternak dan bahan bakar.</p>
                                <a href="/our-product" class="mt-auto">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid  parallax text-center text-white ">
        <h1 data-aos="fade-up">Mari bergabung bersama kami mengelolah sampah organik!</h1>
    </div>





@endsection
