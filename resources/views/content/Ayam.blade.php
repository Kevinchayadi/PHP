@extends('Template.main')

@section('tittle', 'Detail-Ayam')

@section('content')
@include('Template.headers', ['temp' => 'Adiluhung Chicken'])

<div class="ayam p-5">
    <div class="container-fluid ">
        <div class="row h-100">
            <div class="col-4  d-flex flex-column justify-content-between">
                <img src="{{ asset('../Img/ayam1.jpg') }}" alt="" class="img-fluid mb-2" style="flex: 1;" data-aos="fade-down-right" data-aos-delay="550">
                <img src="{{ asset('../Img/ayam2.jpg') }}" alt="" class="img-fluid" style="flex: 1;" data-aos="fade-up-right" data-aos-delay="550">
            </div>
            <div class="col-8  d-flex justify-content-center align-items-center">
                <img src="{{ asset('../Img/ayam3.png') }}" alt="" class="img-fluid" style="height: 100%;"  data-aos="fade-left" data-aos-delay="550">
            </div>
        </div>
        <div class="my-4" >
            <p  data-aos="fade-up">Adiluhung Chicken adalah peternakan ayam yang didirikan dengan tujuan menghasilkan daging ayam berkualitas tinggi untuk memenuhi kebutuhan konsumen yang semakin meningkat. Terletak di lingkungan pedesaan yang asri, peternakan ini memanfaatkan metode peternakan modern yang tetap menghargai keseimbangan alam. Dengan fokus pada kualitas dan keberlanjutan, Adiluhung Chicken tidak hanya berkontribusi pada penyediaan pangan sehat tetapi juga mendukung komunitas lokal melalui pemberdayaan dan lapangan kerja.</p>
            <p data-aos="fade-up">Proses produksi ayam di Adiluhung Chicken dimulai dari penetasan telur unggul yang dipilih dengan teliti untuk memastikan kualitas bibit terbaik. Setelah menetas, anak ayam dipelihara dalam lingkungan yang bersih dan sehat, dengan perhatian khusus pada pemberian pakan yang diformulasikan secara organik. Setiap tahap pertumbuhan diawasi dengan ketat melalui kontrol kualitas yang komprehensif, mulai dari kondisi kesehatan ayam hingga kebersihan kandang. Peternakan ini juga menerapkan praktik berkelanjutan untuk menjaga kesejahteraan hewan dan kualitas lingkungan sekitar. Dengan standar kontrol kualitas yang tinggi, Adiluhung Chicken memastikan setiap ayam yang dihasilkan memiliki daging yang lembut, sehat, dan bebas dari bahan kimia berbahaya.</p>
            <p data-aos="fade-up">Untuk memperkenalkan produknya kepada masyarakat luas, Adiluhung Chicken aktif melakukan berbagai kegiatan promosi yang menonjolkan keunggulan produk mereka. Dengan fokus pada kualitas dan nutrisi, promosi dilakukan melalui berbagai media, termasuk pemasaran digital, partisipasi dalam pameran pangan, serta kolaborasi dengan restoran dan supermarket. Adiluhung Chicken juga menawarkan program langganan daging ayam segar yang langsung diantar ke rumah konsumen, sehingga memudahkan pelanggan untuk mendapatkan produk berkualitas tanpa harus keluar rumah. Melalui promosi yang efektif, Adiluhung Chicken berhasil menarik perhatian pasar yang semakin sadar akan pentingnya memilih produk pangan yang sehat dan berkelanjutan.</p>
        </div>
        <div class="button-container text-center">

            <button class="btn-animate btn-cust">Pesan Sekarang</button>
        </div>
    </div>
</div>




@endsection