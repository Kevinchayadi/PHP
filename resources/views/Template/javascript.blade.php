<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    const card_products = document.querySelectorAll('.card-product');
    card_products.forEach((card, i) => {
        card.dataset.aos = 'zoom-out';
        card.dataset.aosDuration = 800;
        card.dataset.aosDelay = i * 200;
    });

    AOS.init({
        once: true,
        duration: 1200,

    });
</script>
<script>
    // @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.querySelector('.navbar');
        const toggleButton = document.querySelector('.navbar-toggler');
        let isNavbarToggled = false; // Status toggle button

        function handleScroll() {
            // Jika tombol toggle ditekan, navbar tetap tidak transparan
            if (isNavbarToggled || window.scrollY > 0) {
                navbar.classList.add('navbar-opaque');
                navbar.classList.remove('navbar-transparan');
            } else {
                navbar.classList.add('navbar-transparan');
                navbar.classList.remove('navbar-opaque');
            }
        }

        // Toggle button click handler
        toggleButton.addEventListener('click', function() {
            isNavbarToggled = !isNavbarToggled;
            handleScroll(); // Update navbar class ketika toggle button diklik
        });

        // Update navbar class saat halaman di-scroll
        window.addEventListener('scroll', handleScroll);

        // Inisialisasi status awal navbar
        handleScroll();
    });

    document.getElementById('scrollLink').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default anchor behavior

        // Calculate the target position, subtracting 80% of the viewport height
        const target = document.getElementById('whoweare');
        const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - (window.innerHeight *
            0.2);

        // Smoothly scroll to the calculated position
        window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typeit@8.7.1/dist/index.umd.min.js"></script>
<script>
    gsap.to(".icon ", {
        y: -20,
        duration: 0.5,
        ease: "power1.inOut",
        repeat: -1,
        yoyo: true
    });
    document.addEventListener("DOMContentLoaded", function() {
        gsap.from(".header-template h1", {
            y: -100, // Mulai dari posisi 100px di atas
            opacity: 0, // Mulai dengan transparan
            duration: 1.5, // Durasi animasi
            ease: "bounce.out", // Efek bouncing pada akhir animasi
        });
    });

    gsap.to(".text h1", {
        scale: 1, // Animasi menuju ukuran normal
        opacity: 1, // Atur opacity ke 1
        duration: 1, // Durasi animasi 1 detik
        ease: "power2.out", // Efek easing
        stagger: 0.3 // Jeda antara animasi elemen h1
    });

    // Efek mengetik pada elemen p menggunakan TypeIt
    new TypeIt(".text p", {
        speed: 50, // Kecepatan mengetik
        startDelay: 1500, // Mulai setelah animasi h1 selesai
        lifeLike: true, // Efek mengetik yang alami
    }).go();
</script>

<script>
    // Select the button element
    const button = document.querySelector(".btn-animate");

    // GSAP timeline for continuous up and down motion
    const moveUpDown = gsap.timeline({
        repeat: -1,
        yoyo: true,
        ease: "power1.inOut"
    });
    moveUpDown.to(button, {
        y: -20,
        duration: 1
    });

    // Event listener for hover
    button.addEventListener("mouseenter", () => {
        // Pause the continuous movement and enlarge the button
        moveUpDown.pause();
        gsap.to(button, {
            scale: 1.2,
            duration: 0.3,
            ease: "power1.out"
        });
    });

    button.addEventListener("mouseleave", () => {
        // Resume the continuous movement and reset the button size
        gsap.to(button, {
            scale: 1,
            duration: 0.3,
            ease: "power1.in"
        });
        moveUpDown.resume();
    });
</script>
