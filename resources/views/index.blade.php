<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Selamat datang di berijalan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ URL::asset('/assets/img/logo tab.png') }}" rel="icon" />
    <link href="{{ URL::asset('/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ URL::asset('/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ URL::asset('/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: OnePage - v4.7.0
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <!-- <h1 class="logo"><a href="index.html">OnePage</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.php" class="logo"><img src="{{ URL::asset('/assets/img/logo.png') }}" alt="" class="img-fluid"></a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
                    <li><a class="nav-link scrollto" href="#services">Produk & Layanan</a></li>
                    <li><a class="nav-link scrollto" href="#clients">Klien Kami</a></li>
                    <li><a class="nav-link scrollto o" href="#galery">Galeri Foto</a></li>
                    <li><a class="getstarted scrollto" href="contact" style="font-weight: 600;">Hubungi Kami</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
        {{-- <?php if (session()->getFlashdata('sukses')) { ?>
            <div class="alert alert-success" style="text-align: center;">
                <strong>Success!</strong> <?= session()->getFlashdata('sukses') ?>
            </div>
        <?php } ?> --}}
    </header><!-- End Header -->


    <!-- ======= Hero Section ======= -->

    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9 text-center">
                    <h1>Kami memberikan solusi dan membantu bisnis Anda untuk mencapai keunggulan</h1>
                    <h2><b>berijalan</b> fokus untuk menjadi partner terbaik Anda dalam mengelola resiko, meningkatkan efisiensi, dan menjaga keberhasilan bisnis.</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about" style="padding-bottom: 100px;">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2 class="text-capitalize">Tentang Kami</h2>
                    <h5><b>berijalan</b> hadir untuk memudahkan dan menyempurnakan setiap proses bisnis melalui layanan <span class="font-italic-style">Operations Center, Telephony Center dan Techno Center</span>.
                        <b>berijalan</b> siap memberikan pelayanan dan solusi berbasis digital dengan mutu terbaik yang dapat dikustomisasi sesuai kebutuhan di masa depan.
                    </h5>
                </div>

                <div class="row content container">
                    <div class="col-lg-10">
                        <div>
                            <h5>
                                Visi:
                            </h5>
                            <p style="text-align: justify;">
                                Menjadi perusahaan transformasi dan layanan digital global yang kompetitif.
                            </p>
                        </div>
                        <div style="padding-top: 30px;">
                            <h5>
                                Misi:
                            </h5>
                            <p style="text-align: justify;">
                                Membantu pelanggan menjalankan bisnis dengan efisien melalui solusi dan layanan teknologi yang kuat <br> dengan memberdayakan sumber daya lokal.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2 pt-3 pt-lg-0">
                        <h5>
                            Values:
                        </h5>
                        <p>
                        <ul class="font-italic-style">
                            <li><i class="ri-check-double-line"></i>Integrity</li>
                            <li><i class="ri-check-double-line"></i>Teamwork</li>
                            <li><i class="ri-check-double-line"></i>Quality</li>
                            <li><i class="ri-check-double-line"></i>Customer Satisfaction</li>
                        </ul>
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg" style="padding-bottom: 200px;">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2 class="text-capitalize">Produk & Layanan</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-green">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                                </svg>
                                <i class='bx bx-bar-chart-alt-2'></i>
                            </div>
                            <h4 style="font-style: italic;">Operations Center</h4>
                            <div style="text-align: left;">
                                <p>
                                <h5>Tipe Layanan:</h5>
                                <ul>
                                    <li>Layanan <span class="font-italic-style">Data Entry</span></li>
                                    <li>Layanan <span class="font-italic-style">Tele-Survey</span></li>
                                    <li>Layanan Analisis Kredit</li>
                                    <li style="visibility: hidden;">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box iconbox-green ">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                                </svg>
                                <i class='bx bxs-phone-call'></i>
                            </div>
                            <h4 style="font-style: italic;">Telephony Center</h4>
                            <div style="text-align: left;">
                                <p>
                                <h5>Tipe Layanan:</h5>
                                <ul>
                                    <li>Layanan <span class="font-italic-style">Telemarketing</span></li>
                                    <li>Layanan <span class="font-italic-style"> Tele-Verification</span></li>
                                    <li>Layanan <span class="font-italic-style"> Desk Collection</span></li>
                                    <li style="visibility: hidden;">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box iconbox-green">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                                </svg>
                                <i class='bx bxs-business'></i>
                            </div>
                            <h4 style="font-style: italic;">Techno Center</h4>
                            <div style="text-align: left;">
                                <p style="text-align: left;">
                                <h5>Tipe Layanan:</h5>
                                <ul>
                                    <li>Techno <span class="font-italic-style">Web Development</span></li>
                                    <li>Techno <span class="font-italic-style">Digital Product Solution</span></li>
                                    <li>Techno <span class="font-italic-style">Quality Control</span></li>
                                    <li>Techno <span class="font-italic-style">Software Engineering</span></li>
                                    <li>Techno <span class="font-italic-style">System Analyst</span></li>
                                    <li style="visibility: hidden;">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Sevices Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">
                <div class="text-center">
                    <h3 style="font-weight: 900; font-size: 35px;">Kenapa Memilih Kami?</h3>
                </div>
                <div class="row icon-boxes text-center" style="padding-top: 40px;">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <h4 class="title"><a href="" style="color: white; font-size: 25px; font-weight: 600; font-style: italic;">Knowledge</a></h4>
                            <p class="description">Berpengalaman dalam mengelola pelanggan di bidang keuangan dan <span class="font-italic-style">leasing</span></p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box">
                            <h4 class="title font-italic-style"><a href="" style="color: white; font-size: 25px; font-weight: 600;">Process</a></h4>
                            <p class="description">Kemampuan untuk menangani pelanggan dari awal hingga akhir di lokasi yang terpusat</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
                        <div class="icon-box">
                            <h4 class="title"><a href="" style="color: white; font-size: 25px; font-weight: 600; font-style: italic">System & Technology</a></h4>
                            <p class="description">Menghadirkan sistem dan teknologi untuk mengakomodasi <span style="font-style: italic;"> customer journey</span> yang holistik</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
                        <div class="icon-box">
                            <h4 class="title"><a href="" style="color: white; font-size: 25px; font-weight: 600; font-style: italic">People</a></h4>
                            <p class="description">Tim yang unggul dengan budaya yang baik untuk memberikan layanan terbaik bagi kepuasan pelanggan</p>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg" style="padding-top: 150px; padding-bottom: 150px;">
            <div class="container">
                <div class="text-center">
                    <h3 style="color: #6ed34b; font-size: 35px; font-weight: 900;">Klien Kami</h3>
                </div>
                <div class="row">
                    <!--<div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">-->
                    <!--    <img src="{{ URL::asset('/assets/img/clients/client-1.png') }}" class="img-fluid" alt="">-->
                    <!--</div>-->

                    <!--<div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">-->
                    <!--    <img src="{{ URL::asset('/assets/img/clients/client-2.png') }}" class="img-fluid" alt="">-->
                    <!--</div>-->

                    <div class="col-lg-6 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
                        <img style="max-width: 200px;" src="{{ URL::asset('/assets/img/clients/client-3.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
                        <img style="max-width: 200px;" src="{{ URL::asset('/assets/img/clients/client-4.png') }}" class="img-fluid" alt="">
                    </div>

                    <!-- <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="{{ URL::asset('/assets/img/clients/client-5.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="{{ URL::asset('/assets/img/clients/client-6.png') }}" class="img-fluid" alt="">
          </div> -->

                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="galery" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2 class="text-capitalize">Galeri Foto</h2>
                </div>

                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
                        <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button> -->
                        <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button> -->
                        <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9" aria-label="Slide 10"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="10" aria-label="Slide 11"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="11" aria-label="Slide 12"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="12" aria-label="Slide 13"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="13" aria-label="Slide 14"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="15" aria-label="Slide 15"></button> -->
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="background-image: url('{{ URL::asset('/assets/img/portfolio/portfolio-1.jpg') }}">
                            <div class="carousel-caption">
                                <h5>Gedung Tampak Depan</h5>
                                <p>Desain gedung menggunakan motif batik Parang yang mencerminkan budaya khas Yogyakarta</p>
                            </div>
                        </div>
                        <div class="carousel-item" style="background-image: url('{{ URL::asset('/assets/img/portfolio/portfolio-2.jpg') }}">
                            <div class="carousel-caption">
                                <h5>Peresmian Gedung</h5>
                                <p>Peresmian gedung berijalan bersama dengan Gubernur DI Yogyakarta Sri Sultan Hamengku Buwono X, Wakil Bupati Sleman Danang Maharsa, SE, Director in Charge Astra Financial & Logistic Suparno Djasmin, Presiden Direktur Astra Credit Companies Siswadi serta segenap Board of Director ACC lainnya</p>
                            </div>
                        </div>
                        <div class="carousel-item" style="background-image: url('{{ URL::asset('/assets/img/portfolio/portfolio-3.jpg') }}">
                            <div class="carousel-caption">
                                <h5 class="font-italic-style">Milestone </h5>
                                <p>Perjalanan dan pencapaian ACC yang menjadi filosofi utama dibentuknya berijalan</p>
                            </div>
                        </div>
                        <div class="carousel-item" style="background-image: url('{{ URL::asset('/assets/img/portfolio/portfolio-4.jpg') }}">
                            <div class="carousel-caption">
                                <h5 class="font-italic-style">Workspace Room</h5>
                                <p>Ruang kerja untuk mendukung kinerja talenta berijalan</p>
                            </div>
                        </div>
                        <div class="carousel-item" style="background-image: url('{{ URL::asset('/assets/img/portfolio/portfolio-5.jpg') }}">
                            <div class="carousel-caption">
                                <h5 class="font-italic-style">Breakout Room</h5>
                                <p>Ruangan yang difungsikan untuk talenta berijalan bersantai sejenak dan bertukar pikiran</p>
                            </div>
                        </div>
                        <div class="carousel-item" style="background-image: url('{{ URL::asset('/assets/img/portfolio/portfolio-6.JPG') }}">
                            <div class="carousel-caption">
                                <h5>CSR</h5>
                                <p>berijalan mengadakan program vaksinasi booster Covid-19 untuk masyarakat Yogyakarta</p>
                            </div>
                        </div>
                        <div class="carousel-item" style="background-image: url({{ URL::asset('/assets/img/portfolio/portfolio-7.jpg') }}">
                            <div class="carousel-caption">
                                <h5>UNPAR</h5>
                                <p>Kunjungan dari Universitas Parahyangan (UNPAR) ke berijalan</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 footer-contact">
                        <h3 style="color: #2487ce;">Hubungi Kami</h3>
                        <div style="display: flex;">
                            <div class="col-lg-6 strech" style="display: flex;">
                                <p>
                                    <strong class="font-italic-style">Call Center</strong><br>
                                    <strong>Senin - Jum'at</strong> <br>
                                    08.00 - 16.00 <br>
                                    <strong>Sabtu</strong> <br>
                                    08.00 - 13.00 <br>
                                    <strong>0274 5029009</strong>
                                </p>
                            </div>
                            <div class="col-lg-6 sp" style="display: grid;">
                                <div style="font-size: 13px; padding: 25px 0 10px 0;">
                                    Tertarik dengan produk dan layanan kami?
                                    Hubungi kami untuk konsultasi keperluan <br> bisnis Anda.
                                </div>
                                <div>
                                    <a href="contact" class="cont btn scrollto" style="font-weight: 700;">Kontak Kami >></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <h3 style="font-weight: 300; color: #2487ce;">Lokasi berijalan</h3>
                        <div style="display: flex;">
                            <div class="col-lg-6 col-md-6 footer-links">
                                <h4 style="font-weight: 400;">Mrican <span class="font-italic-style">(Operations Center & Telephony Center)</span></h4>
                                <p>
                                    Jl. Pringgodani No.1A, Mrican, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281
                                </p>
                            </div>
                            <div class="col-lg-6 col-md-6 footer-links sp">
                                <h4 style="font-weight: 400;">Petung <span class="font-italic-style">(Techno Center)</span></h4>
                                <p>
                                    Jl. Petung No.3, Papringan, Caturtunggal, Kec. Depok,<br> Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    <div class="container d-md-flex py-4">
      <div class="me-md-auto text-center text-md-start">
        <div class="credits">
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ URL::asset('/assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ URL::asset('/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ URL::asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ URL::asset('/assets/js/main.js') }}"></script>

</body>

</html>