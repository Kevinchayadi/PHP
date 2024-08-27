@extends('Template.main')

@section('tittle', 'Tentang-Kami')

@section('content')
    @include('Template.headers', ['temp' => 'Tentang Kami'])

    <div class="aboutus ">
        <div class="container border-bottom ">
            <div class="row m-5 d-flex align-content-center justify-content-center m-5">
                <div class="image-company col-12 d-flex align-content-center justify-content-center m-5">
                    <img src="{{ asset('../Img/about.JPG') }}" alt="" style="height: 100%">

                </div>
                <div class="description col-12 d-flex flex-column justify-content-center" data-aos="fade-left">
                    <h1 class="text-center">PT Parung Hijau Perkasa</h1>
                    <p>
                        PT Parung Hijau Perkasa adalah perusahaan yang berdiri pada tanggal 27 Maret 2020 dan berlokasi di
                        Bogor, Jawa Barat. Sejak awal pendiriannya, perusahaan ini telah berkomitmen untuk berkontribusi
                        pada peningkatan ekonomi lokal dan keberlanjutan lingkungan. Beroperasi di daerah yang kaya akan
                        sumber daya alam, PT Parung Hijau Perkasa memanfaatkan potensi lokal dengan memberdayakan masyarakat
                        setempat dan menerapkan praktik pertanian serta pengelolaan sumber daya yang berkelanjutan. Dengan
                        fokus pada pertanian, peternakan, perikanan, dan pengelolaan sampah, perusahaan ini tidak hanya
                        menciptakan lapangan kerja, tetapi juga berperan penting dalam menjaga keseimbangan ekosistem di
                        wilayah Bogor dan sekitarnya.
                    </p>
                    <br>
                    <p>
                        Selain pertanian, sektor peternakan juga menjadi salah satu fokus utama PT Parung Hijau Perkasa,
                        terutama dalam budidaya ayam kampung. Ayam kampung dari perusahaan ini dipelihara dengan metode
                        organik, tanpa penggunaan antibiotik atau hormon, sehingga menghasilkan daging ayam yang sehat dan
                        berkualitas tinggi. Ayam kampung dikenal memiliki daging yang lebih padat dan rasa yang lebih gurih
                        dibandingkan dengan ayam broiler. Melalui budidaya ayam kampung ini, PT Parung Hijau Perkasa tidak
                        hanya berkontribusi pada pemenuhan kebutuhan protein hewani bagi masyarakat, tetapi juga memberikan
                        dampak ekonomi yang signifikan bagi peternak di sekitar Bogor.

                    </p>
                    <br>
                    <p>
                        Salah satu produk unggulan dari PT Parung Hijau Perkasa adalah Pisang Cavendish. Perusahaan ini
                        memiliki kebun pisang yang dikelola dengan teknologi modern dan praktik pertanian yang berkelanjutan
                        untuk memastikan hasil panen yang optimal. Pisang Cavendish yang diproduksi memiliki ukuran yang
                        seragam, kulit yang mulus, serta rasa yang manis dan lezat. Dengan kualitas unggul tersebut, produk
                        ini tidak hanya memenuhi permintaan pasar domestik, tetapi juga mulai merambah ke pasar ekspor.
                        Keberhasilan produksi pisang ini telah memberikan dampak positif terhadap peningkatan ekonomi di
                        daerah Bogor, serta membantu memperkuat posisi Indonesia sebagai produsen buah tropis berkualitas di
                        kancah internasional.
                    </p>
                    <br>
                    <p>
                        Di sektor perikanan, PT Parung Hijau Perkasa fokus pada budidaya ikan patin, yang merupakan salah
                        satu jenis ikan air tawar yang banyak diminati di Indonesia. Dengan memanfaatkan teknologi budidaya
                        modern dan menerapkan standar kebersihan yang tinggi, perusahaan ini berhasil memproduksi ikan patin
                        dengan kualitas terbaik. Ikan patin dari PT Parung Hijau Perkasa dikenal karena tekstur dagingnya
                        yang lembut, kandungan proteinnya yang tinggi, serta rasanya yang gurih. Selain memenuhi kebutuhan
                        pasar lokal, produksi ikan patin ini juga memberikan dampak ekonomi yang signifikan dengan
                        memberdayakan petani ikan di sekitar Bogor.
                    </p>
                    <br>
                    <p>
                        Di sektor perikanan, PT Parung Hijau Perkasa fokus pada budidaya ikan patin, yang merupakan salah
                        satu jenis ikan air tawar yang banyak diminati di Indonesia. Dengan memanfaatkan teknologi budidaya
                        modern dan menerapkan standar kebersihan yang tinggi, perusahaan ini berhasil memproduksi ikan patin
                        dengan kualitas terbaik. Ikan patin dari PT Parung Hijau Perkasa dikenal karena tekstur dagingnya
                        yang lembut, kandungan proteinnya yang tinggi, serta rasanya yang gurih. Selain memenuhi kebutuhan
                        pasar lokal, produksi ikan patin ini juga memberikan dampak ekonomi yang signifikan dengan
                        memberdayakan petani ikan di sekitar Bogor.
                    </p>
                    <br>
                    <p>
                        Tidak hanya fokus pada produksi pangan, PT Parung Hijau Perkasa juga memiliki program pengelolaan
                        sampah organik melalui metode waste management yang inovatif. Limbah organik dari proses produksi
                        pertanian dan peternakan diolah menjadi pakan ternak dan maggot. Maggot, yang dihasilkan dari limbah
                        organik, merupakan sumber protein tinggi yang digunakan sebagai pakan alternatif untuk unggas dan
                        ikan. Program ini tidak hanya mengurangi volume sampah yang berakhir di tempat pembuangan akhir,
                        tetapi juga memberikan nilai tambah dengan menghasilkan produk yang dapat digunakan kembali dalam
                        rantai produksi. Dengan demikian, PT Parung Hijau Perkasa turut berperan dalam menjaga kelestarian
                        lingkungan sembari mendukung pertumbuhan ekonomi lokal.
                    </p>
                </div>
            </div>
        </div>


        <div class="misidanvisi container-fluid">
            <div class="row ">
                <div class="col-12 bg-visi " data-aos="fade-left">
                    <H1 class="text-center">Visi</H1>
                    <p>Menjadi perusahaan terkemuka di bidang pertanian, peternakan, perikanan dan pengelolaan sampah dengan
                        mengedepankan keberlanjutan lingkungan dan kesejahteraan masyarakat.
                    </p>
                </div>
                <div class="col-12  " data-aos="fade-right">
                    <H1 class="text-center" >Misi</H1>
                    <p> Menghasilkan produk berkualitas tinggi dengan proses produksi yang ramah lingkungan.</p>
                    <p>Memberikan nilai tambah kepada masyarakat melalui produk-produk yang berkualitas.</p>
                    <p>Mengembangkan inovasi teknologi untuk meningkatkan efisiensi produksi dan mengurangi dampak
                        lingkungan.</p>
                </div>
            </div>
        </div>

        <div class="container" data-aos="fade-up">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="box shadow">
                        <div class="row">
                            <div class="col-12 col-lg-3 d-flex justify-content-center align-items-center nilai p-3">
                                <h1 class="">Nilai Perusahaan</h1>
                            </div>
                            <div class="col-12 col-lg-9 ml-1 isi p-3">
                                <p>1. Berkelanjutan</p>
                                <p>2. Berkualitas</p>
                                <p>3. Inovatif</p>
                                <p>4. Bertanggung jawab</p>
                                <p>5. Berorientasi pada masyarakat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
