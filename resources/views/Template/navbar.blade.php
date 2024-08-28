<nav class="navbar navbar-expand-lg navbar-edit navbar-transparan " data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/home">
            <img src="{{ asset("../Img/logo php.png") }}" alt="Logo PT. Parung Hijau Perkasa" >
            <span class="navbar-brand-text">
                <strong>ParungHijau<span class="perkasa-text">Perkasa</span></strong>
            </span>
            
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse bg-edit" id="navbarNav">
            <ul class="navbar-nav  ms-auto mx-5 ">
                <li class="nav-item ms-2">
                    <a class="nav-link @if(request()->route()->uri == 'home') active @endif" href="/home">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->uri == 'about-us') active @endif" href="/about-us">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->uri == 'our-product') active @endif" href="/our-product">Produk Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->uri == 'contact-us') active @endif" href="/contact-us">Hubungi Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
