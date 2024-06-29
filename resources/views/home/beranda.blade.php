<style>
#hero {
    background-color: #000;
    padding: 60px 0;
}

.hero-title {
    font-size: 4rem;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
}

.hero-subtitle {
    font-size: 1.5rem;
}

.location-icon {
    width: 80px;
    height: 80px;
    border-radius: 10px;
    box-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

/* Media queries untuk responsivitas */
@media screen and (max-width: 992px) {
    .hero-title {
        font-size: 3.5rem;
    }
}

@media screen and (max-width: 768px) {
    .hero-title {
        font-size: 3rem;
    }
    .hero-subtitle {
        font-size: 1.2rem;
    }
}

@media screen and (max-width: 576px) {
    .hero-title {
        font-size: 2.5rem;
    }
    .hero-subtitle {
        font-size: 1rem;
    }
    .location-icon {
        width: 60px;
        height: 60px;
    }
}
</style>
<section id="hero" class="min-vh-100 d-flex align-items-center text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5 class="text-white" data-aos="fade-right">10 - 13 Juli 2024</h5>
                <h1 data-aos="fade-left" class="text-uppercase text-white fw-semibold display-2 hero-title">RAKORNIS PERWADAG</h1>
                <div class="row py-2 justify-content-center">
                    <div class="col-12 col-md-8 px-0 d-flex align-items-center justify-content-center">
                        <img data-aos="fade-right" class="me-3 theme-shadow location-icon" src="{{ asset('assets/images/icon-lokasi.png')}}"
                            alt="Lokasi">
                        <div class="text-left d-flex flex-column align-items-start">
                            <h2 data-aos="fade-right" class="h5 mb-0 text-white">Lokasi</h2>
                            <p data-aos="fade-right" class="mb-0 text-white" style="font-weight: 500; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Grand Hyatt Melbourne</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                <div class="section-title">
                    <h1 class="display-4 fw-semibold">Menteri Perdagangan</h1>
                    <div class="line"></div>
                    <p>Berikut adalah Menteri Perdagangan Republik Indonesia <span class="bold"></span></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-12 mb-4 mb-lg-0 text-center" data-aos="fade-down" data-aos-delay="50">
                <img src="{{ asset('assets/images/mendag.jpg')}}" alt="" class="img-fluid" style="border-radius: 50px; width: 60%; margin-bottom: 10px;">
            </div>
            <div data-aos="fade-down" data-aos-delay="150" class="col-lg-5 col-12 text-center text-lg-start">
                <h1 style="margin-bottom: 10px;">Zulkifli Hasan, S.E., M.M.</h1>
                <p class="mt-3 mb-4" style="font-size: 1rem;">DR. (H.C). Zulkifli Hasan, S.E., M.M. yang akrab disapa Bang Zul dilantik sebagai Menteri Perdagangan Republik Indonesia pada 15 Juni 2022 oleh Presiden Joko Widodo. Sebelum dilantik, ia menjabat sebagai Wakil Ketua MPR periode 2019 hingga 2022. Sebelumnya, ia juga menjabat sebagai Ketua MPR periode 2014 hingga 2019.
                    Perwadag merupakan ujung tombak promosi produk Indonesia di luar negeri, adanya Rakornis Perwadag ini saya harap dapat menjadi ajang penguatan strategi perdagangan dan menjadi upaya peningkatan ekspor Indonesia di masa mendatang.</p>
            </div>
        </div>
    </div>
</section>



<section id="about" class="section-padding" style="padding: 60px 0;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5" data-aos="fade-down" data-aos-delay="50">
                <!-- Content removed as per the provided code -->
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0 text-center text-lg-start" data-aos="fade-down" data-aos-delay="150">
                <h1 style="font-size: 3rem;">Download Buku Panduan</h1>
                <p class="mt-3 mb-4" style="font-size: 1rem;">

                </p>
            </div>
            <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end" data-aos="fade-down" data-aos-delay="50">
                <div class="border-box p-3" style="border: 4px solid #ddd; border-radius: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 70%; margin: 20px 0;">
                    <img src="{{ asset('assets/images/guidebook.jpeg')}}" alt="" style="border-radius: 20px; width: 100%; margin-bottom: 20px;">
                    <div class="text-center">
                        <a href="{{ asset('assets/download/Buku Panduan-2.pdf')}}" download class="btn btn-primary" style="border-radius: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">Download Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- COUNTER -->
<section id="counter" class="section-padding">
    <div class="container text-center">
        <div class="mb-5 pb-5 text-center"> <span class="icon-title icon-bg-light rounded-circle  mb-3">
                <img class="icon-title-inner" src="//raker.kemendag.go.id/assets/svg/refresh.svg" alt=""
                    style="width: 200px; height: 200px;">
            </span>
            <h2 class="text-white h1">Hitung Mundur Pembukaan Acara</h2>
            <p class="w-md-70 mx-auto text-white mb-0 lead">
                11 Juni 2024 - 08:00 AM </p>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                <div class="countdown-item">
                    <h1 class="text-white display-4" id="days"></h1>
                    <h4 class="text-uppercase mb-0 text-white mt-3">Hari</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                <div class="countdown-item">
                    <h1 class="text-white display-4" id="hours"></h1>
                    <h4 class="text-uppercase mb-0 text-white mt-3">Jam</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                <div class="countdown-item">
                    <h1 class="text-white display-4" id="minutes"></h1>
                    <h4 class="text-uppercase mb-0 text-white mt-3">Menit</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="450">
                <div class="countdown-item">
                    <h1 class="text-white display-4" id="seconds"></h1>
                    <h4 class="text-uppercase mb-0 text-white mt-3">Detik</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="sekitar" class="section-padding border-top">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                <div class="section-title">
                    <h1 class="display-4 fw-semibold">Tempat Acara</h1>
                    <div class="line"></div>
                    <p>Berikut adalah gambaran-gambaran mengenai tempat yang akan digunakan untuk acara RAKORNIS PERWADAG 2024</p>
                </div>
            </div>
        </div>
        <div class="row g-4 text-center ">
            <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
                <div class="team-member image-zoom">
                    <div class="image-zoom-wrapper">
                        <a href="" target="_blank">
                            <img src="{{ asset('assets/images/1.png')}}" alt="">
                        </a>
                    </div>
                    <div class="team-member-content">
                        <h4 class="text-white">Free Tram Zone</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-down" data-aos-delay="250">
                <div class="team-member image-zoom">
                    <div class="image-zoom-wrapper">
                        <a href="" target="_blank">
                            <img src="{{ asset('assets/images/2.png')}}" alt="">
                        </a>
                    </div>
                    <div class="team-member-content">
                        <h4 class="text-white">Layout Ruangan</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
                <div class="team-member image-zoom">
                    <div class="image-zoom-wrapper">
                        <a href=""
                            target="_blank">
                            <img src="{{ asset('assets/images/3.png')}}" alt="">
                        </a>
                    </div>
                    <div class="team-member-content">
                        <h4 class="text-white">Photo Wall</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-4 text-center pt-5">
            <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
                <div class="team-member image-zoom">
                    <div class="image-zoom-wrapper">
                        <a href="" target="_blank">
                            <img src="{{ asset('assets/images/4.png')}}" alt="">
                        </a>
                    </div>
                    <div class="team-member-content">
                        <h4 class="text-white">Mini Expo</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-down" data-aos-delay="250">
                <div class="team-member image-zoom">
                    <div class="image-zoom-wrapper">
                        <a href=""
                            target="_blank">
                            <img src="{{ asset('assets/images/5.png')}}" alt="">
                        </a>
                    </div>
                    <div class="team-member-content">
                        <h4 class="text-white">Layout Sketsa </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
                <div class="team-member image-zoom">
                    <div class="image-zoom-wrapper">
                        <a href=""
                            target="_blank">
                            <img src="{{ asset('assets/images/6.png')}}" alt="">
                        </a>
                    </div>
                    <div class="team-member-content">
                        <h4 class="text-white">Savoy Ballroom</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-down" data-aos-delay="350">
                <div class="team-member image-zoom">
                    <div class="image-zoom-wrapper">
                        <a href=""
                            target="_blank">
                            <img src="{{ asset('assets/images/7.png')}}" alt="">
                        </a>
                    </div>
                    <div class="team-member-content">
                        <h4 class="text-white">Foyer</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-down" data-aos-delay="350">
                <div class="team-member image-zoom">
                    <div class="image-zoom-wrapper">
                        <a href=""
                            target="_blank">
                            <img src="{{ asset('assets/images/8.png')}}" alt="">
                        </a>
                    </div>
                    <div class="team-member-content">
                        <h4 class="text-white">Peta</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
