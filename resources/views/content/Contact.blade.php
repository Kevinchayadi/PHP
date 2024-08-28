@extends('Template.main')

@section('meta-description', 'Alamat : AKR Tower Lt 12C, Jalan Panjang No 5, RT.11/RW.10, Kebon Jeruk')

@section('meta-keywords', 'PT Parung Hijau Perkasa,Parung Hijau Perkasa, Parung Hijau, parung hijau perkasa, kontak parunghijau perkasa, kontak adiluhung, hubungi parung hijau perkasa, hubungi sungrow')

@section('og-title', 'Tentang Kami - PT. Parung Hijau Perkasa')
@section('og-description', 'PT Parung Hijau Perkasa berdedikasi untuk berkontribusi pada ekonomi lokal dan menjaga lingkungan melalui praktik pertanian, peternakan, dan pengelolaan sampah yang berkelanjutan.')
@section('og-url', url('https://parunghijauperkasa.com/contact-us'))
@section('og-type', 'website')
@section('og-image', url('path-to-your-image/about-us.jpg'))

@section('twitter-title', 'Tentang Kami - PT. Parung Hijau Perkasa')
@section('twitter-description', 'Kenali lebih jauh tentang PT Parung Hijau Perkasa, perusahaan di Bogor yang berkomitmen pada keberlanjutan dan kesejahteraan masyarakat melalui pertanian dan pengelolaan sumber daya.')
@section('twitter-url', url('https://parunghijauperkasa.com/contact-us'))
@section('twitter:image', url('path-to-your-image/about-us.jpg'))

@section('tittle', 'Hubungi-Kami')

@section('content')
@include('Template.headers', ['temp' => 'Hubungi Kami'])

<div class="contact p-5">
    <div class="container-fluid">
        <div class="align-items-center  row main-layout  px-3">
            <div class="col-12 col-lg-6  same-height pt-3 ">
                <div class="findus-board" data-aos="zoom-in-right"data-aos-delay="550">
                    <h3 class="text-center">Find Us</h3>
                    <h1>Alamat Kantor:</h1>
                    <p> AKR Tower Lt 12C, Jalan Panjang No 5, RT.11/RW.10, Kebon Jeruk, RT.11/RW.10, Kb. Jeruk, Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta</p>
                    <p>Email : blablabla@parunghijau.com</p>
                    <p>telepon : +62 </p>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5489345653423!2d106.76535217499016!3d-6.19105739379653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f71c550ff6a3%3A0x6497c3f6c8aa91c5!2sAKR%20Tower%2C%20Kb.%20Jeruk%2C%20Kec.%20Kb.%20Jeruk%2C%20Kota%20Jakarta%20Barat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sen!2sid!4v1723618842602!5m2!1sen!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-lg-6 same-height py-3 d-flex justify-content-center" data-aos="zoom-out-left"data-aos-delay="550">
                <form action="/contact-us" method="POST">
                    @csrf
                    <div class="row  wooden-board">
                        <div>
                            <h3 class="text-center">Contact Us</h3>
                        </div>
                        
                        <div class="col-12 col-sm-6 d-flex flex-column my-2 ">
                            <label for="">Nama Depan</label>
                            <input type="text" name="first_name" placeholder="Nama Depan" class="form-control" required>
                        </div>
                        <div class="col-12 col-sm-6 d-flex flex-column my-2">
                            <label for="">Nama Belakang</label>
                            <input type="text" name="last_name" placeholder="Nama Belakang" class="form-control">
                        </div>
                        <div class="col-12 col-sm-6 d-flex flex-column my-2">
                            <label for="">Email</label>
                            <input type="email" name="email" placeholder="Email" class="form-control" required>
                        </div>
                        <div class="col-12 col-sm-6 d-flex flex-column my-2">
                            <label for="">No. Telepon</label>
                            <input type="text" name="Phone" placeholder="No. Telepon" class="form-control">
                        </div>
                        <div class="col-12 d-flex flex-column my-2">
                            <label for="">Judul</label>
                            <input type="text" name="subject" placeholder="Judul" required>
                        </div>
                        <div class="col-12 d-flex flex-column my-2">
                            <label for="">pesan</label>
                            <textarea name="message" placeholder="Pesan" class="form-control" required></textarea>
                        </div>
                        <div class="col-12 text-center my-2">
                            <button type="submit" class="btn-cust btn-size">Send</button>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div> 
    
    </div>
</div>




@endsection