@extends('layouts.main')

@section('container')
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Welcome to <span>BPMSPH</span></h2>
                    <p>Selamat datang di halaman pengisian data diri tamu kami. Mohon mengisi formulir di bawah ini
                        dengan informasi yang akurat dan lengkap</p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started">Profil Singkat</a>
                        <a href="https://youtu.be/liTcM3jXSXE" class="glightbox btn-watch-video d-flex align-items-center"><i
                                class="bi bi-play-circle"></i><span>Video Profil</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="assets/img/preview.png" class="img-fluid" alt="" data-aos="zoom-out"
                        data-aos-delay="100">
                </div>
            </div>
        </div>

        <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row gy-4 mt-5">

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-list"></i></div>
                            <h4 class="title"><a href="https://forms.gle/KpEFMHvv6UdQBcKu9" class="stretched-link">IKM</a>
                            </h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-card-checklist"></i></div>
                            <h4 class="title"><a href="/sample-uji" class="stretched-link">Pengantaran
                                    Sample Uji</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-card-list"></i></div>
                            <h4 class="title">
                                <a href="/konsultasi-kunjungan" class="stretched-link">Konsultasi / Kunjungan</a>
                            </h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-award"></i></div>
                            <h4 class="title"><a href="/ulasan" class="stretched-link">Ulasan Pelayanan</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                </div>
            </div>
        </div>
    </section>
    <!-- End Menu Section -->

    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>About Us</h2>
                    <p>Balai Pengujian Mutu dan Sertifikasi Produk Hewan (BPMSPH) adalah instansi yang bertanggung jawab
                        untuk melakukan pengujian mutu, analisis, dan sertifikasi terhadap produk-produk hewan, baik itu
                        produk olahan, daging, susu, telur, dan lain sebagainya.</p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <h3>Sejarah BPMSPH</h3>
                        <img src="assets/img/sejarah.jpg" class="img-fluid rounded-4 mb-4" alt="">
                        <p class="justify">Didirikan pada 9 Juni 1994, Balai Pengujian Mutu dan Sertifikasi Produk
                            Hewan (BPMSPH) muncul sebagai bentuk komitmen terhadap kualitas dan keamanan pangan ditandai
                            dengan terbitnya Surat Keputusan Menteri Pertanian No.466/Kpts/OT.210/6/1994. Dengan waktu,
                            BPMSPH tumbuh menjadi pusat pengujian terkemuka yang berperan penting dalam menjaga standar
                            produk-produk hewan yang berkualitas tinggi di pasaran.
                        </p>
                        <p class="justify">Bekerja Bersama dengan industri dan masyarakat, BPMSPH telah melalui
                            berbagai tahap kolaborasi untuk meningkatkan kualitas pangan. Saat ini BPMSPH telah memiliki
                            laboratorium terpadu yang terdiri laboratorium Cemaran Mikroba I, Laboratorium Cemaran
                            Mikroba II, Laboratorium Skrining Residu Obat dan Antibiotik Mikrobial Resistence (AMR)
                            Laboratorium Kimia I dan Laboratorium Kimia II dan Bioteknologi selain itu BPMSPH telah
                            mendirikan gedung Bimtek Laboratorium Spesifikasi Kesmavet.</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">
                                <strong>VISI :</strong> Mewujudkan BPMSPH sebagai lembaga pemeriksaan, pengujian dan
                                sertifikasi keamanan dan mutu produk hewan nasional yang
                                handal dan bertaraf internasional.
                            </p>
                            <p class="justify"><strong>MISI :</strong></p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Meningkatkan pelayanan pemeriksaan,
                                    pengujian kemanan dan mutu produk hewan dengan menerapkan persyaratan laboratorium
                                    yang diakreditasi;</li>
                                <li><i class="bi bi-check-circle-fill"></i> Meningkatkan kompetensi dan kapasitas
                                    laboratorium dalam rangka menjamin keabsahan/validitas hasil pengujian dan
                                    mewujudkan produk hewan yang aman, sehat, utuh, dan halal;</li>
                                <li><i class="bi bi-check-circle-fill"></i> Melaksanakan sertifikasi kemanan dan mutu
                                    produk hewan;</li>
                                <li><i class="bi bi-check-circle-fill"></i> Meningkatkan pemantauan. pengamatan, dan
                                    pengawasan dalam rangka mewujudkan penjaminan produk hewan yang aman, sehat, utuh,
                                    dan halal;</li>
                                <li><i class="bi bi-check-circle-fill"></i> Meningkatkan pengembangan teknis dan metode
                                    pengujian keamanan dan mutu produk hewan yang didukung dengan peningkatan sarana dan
                                    prasarana;</li>
                            </ul>


                            <div class="position-relative mt-4">
                                <img src="assets/img/cover.png" class="img-fluid rounded-4" alt="">
                                <a href="https://youtu.be/N05Tass96RU" class="glightbox play-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Mitra Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Mitra</h2>

                    <section id="mitra" class="clients">
                        <div class="container" data-aos="zoom-out">
                            <div class="clients-slider swiper">
                                <div class="swiper-wrapper align-items-center">
                                    <div class="swiper-slide"><img src="assets/img/clients/1.png" class="img-fluid"
                                            alt=""></div>
                                    <div class="swiper-slide"><img src="assets/img/clients/2.png" class="img-fluid"
                                            alt=""></div>
                                    <div class="swiper-slide"><img src="assets/img/clients/3.png" class="img-fluid"
                                            alt=""></div>
                                    <div class="swiper-slide"><img src="assets/img/clients/4.png" class="img-fluid"
                                            alt=""></div>
                                    <div class="swiper-slide"><img src="assets/img/clients/5.png" class="img-fluid"
                                            alt=""></div>
                                    <div class="swiper-slide"><img src="assets/img/clients/6.png" class="img-fluid"
                                            alt=""></div>
                                    <div class="swiper-slide"><img src="assets/img/clients/7.png" class="img-fluid"
                                            alt=""></div>
                                    <div class="swiper-slide"><img src="assets/img/clients/8.png" class="img-fluid"
                                            alt=""></div>
                                    <div class="swiper-slide"><img src="assets/img/clients/9.png" class="img-fluid"
                                            alt=""></div>
                                    <div class="swiper-slide"><img src="assets/img/clients/10.png" class="img-fluid"
                                            alt=""></div>
                                    <div class="swiper-slide"><img src="assets/img/clients/11.png" class="img-fluid"
                                            alt=""></div>
                                </div>
                            </div>
                        </div>
                    </section><!-- End Mitra Section -->

                    <!-- ======= Client Section ======= -->
                    <section id="Client" class="stats-counter">
                        <div class="container" data-aos="fade-up">

                            <div class="section-header">
                                <h2>Client</h2>

                                <div class="row gy-4 align-items-center">

                                    <div class="col-lg-6">
                                        <img src="assets/img/stats-img.svg" alt="" class="img-fluid">
                                    </div>

                                    <div class="col-lg-6">

                                        <div class="stats-item d-flex align-items-center">
                                            <span data-purecounter-start="0" data-purecounter-end="600"
                                                data-purecounter-duration="1" class="purecounter"></span>
                                            <p><strong> More Happy Clients</strong></p>
                                        </div><!-- End Stats Item -->

                                        <div class="stats-item d-flex align-items-center">
                                            <span data-purecounter-start="0" data-purecounter-end="521"
                                                data-purecounter-duration="1" class="purecounter"></span>
                                            <p><strong>Projects</strong></p>
                                        </div><!-- End Stats Item -->

                                        <div class="stats-item d-flex align-items-center">
                                            <span data-purecounter-start="0" data-purecounter-end="27"
                                                data-purecounter-duration="1" class="purecounter"></span>
                                            <p><strong>+ Years Of Support</strong></p>
                                        </div><!-- End Stats Item -->

                                    </div>

                                </div>

                            </div>
                        </div>
                    </section><!-- End Client Section -->

                    <!-- ======= K3 Section ======= -->
                    <section id="k3" class="call-to-action">
                        <div class="container text-center" data-aos="zoom-out">
                            <a href="https://www.youtube.com/watch?v=YSUNbB-C2c0" class="glightbox play-btn"></a>
                            <h3>Safety Induction</h3>
                            <p> Video berikut bertujuan untuk memberikan pemahaman singkat dan efektif kepada para
                                pembaca mengenai langkah-langkah keselamatan yang perlu diikuti ketika berada di
                                lingkungan kerja. </p>
                            <a class="cta-btn" href="https://www.youtube.com/watch?v=YSUNbB-C2c0">Safety Induction</a>
                        </div>
                    </section><!-- End K3 Section -->

                    <!-- ======= Testimonials Section ======= -->
                    <section id="testimonials" class="testimonials">
                        <div class="container" data-aos="fade-up">

                            <div class="section-header">
                                <h2>Testimoni</h2>
                                <p>Lebih dari 669 client yang percaya dan yakin dengan hasil Uji Produk mereka di
                                    BPMSPH.</p>
                            </div>

                            <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="testimonial-wrap">
                                            <div class="testimonial-item">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/img/testimonials/CHIKA.jpg"
                                                        class="testimonial-img flex-shrink-0" alt="">
                                                    <div>
                                                        <h3>Chika Desvi</h3>
                                                        <h4>Mahasiswa</h4>
                                                        <div class="stars">
                                                            <i class="bi bi-star-fill"></i><i
                                                                class="bi bi-star-fill"></i><i
                                                                class="bi bi-star-fill"></i><i
                                                                class="bi bi-star-fill"></i><i
                                                                class="bi bi-star-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>
                                                    <i class="bi bi-quote quote-icon-left"></i>
                                                    ....
                                                    <i class="bi bi-quote quote-icon-right"></i>
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- End testimonial item -->

                                    <div class="swiper-slide">
                                        <div class="testimonial-wrap">
                                            <div class="testimonial-item">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/img/testimonials/testimonials-2.jpg"
                                                        class="testimonial-img flex-shrink-0" alt="">
                                                    <div>
                                                        <h3>...</h3>
                                                        <h4>..</h4>
                                                        <div class="stars">
                                                            <i class="bi bi-star-fill"></i><i
                                                                class="bi bi-star-fill"></i><i
                                                                class="bi bi-star-fill"></i><i
                                                                class="bi bi-star-fill"></i><i
                                                                class="bi bi-star-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>
                                                    <i class="bi bi-quote quote-icon-left"></i>
                                                    ...
                                                    <i class="bi bi-quote quote-icon-right"></i>
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- End testimonial item -->

                                    <div class="swiper-slide">
                                        <div class="testimonial-wrap">
                                            <div class="testimonial-item">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/img/testimonials/testimonials-3.jpg"
                                                        class="testimonial-img flex-shrink-0" alt="">
                                                    <div>
                                                        <h3>..</h3>
                                                        <h4>..</h4>
                                                        <div class="stars">
                                                            <i class="bi bi-star-fill"></i><i
                                                                class="bi bi-star-fill"></i><i
                                                                class="bi bi-star-fill"></i><i
                                                                class="bi bi-star-fill"></i><i
                                                                class="bi bi-star-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>
                                                    <i class="bi bi-quote quote-icon-left"></i>
                                                    ..
                                                    <i class="bi bi-quote quote-icon-right"></i>
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- End testimonial item -->

                                    <div class="swiper-slide">
                                        <div class="testimonial-wrap">
                                            <div class="testimonial-item">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/img/testimonials/testimonials-4.jpg"
                                                        class="testimonial-img flex-shrink-0" alt="">
                                                    <div>
                                                        <h3>..</h3>
                                                        <h4>..</h4>
                                                        <div class="stars">
                                                            <i class="bi bi-star-fill"></i><i
                                                                class="bi bi-star-fill"></i><i
                                                                class="bi bi-star-fill"></i><i
                                                                class="bi bi-star-fill"></i><i
                                                                class="bi bi-star-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>
                                                    <i class="bi bi-quote quote-icon-left"></i>
                                                    ..
                                                    <i class="bi bi-quote quote-icon-right"></i>
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- End testimonial item -->

                                    <div class="swiper-slide">
                                        <div class="testimonial-wrap">
                                            <div class="testimonial-item">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/img/testimonials/testimonials-5.jpg"
                                                        class="testimonial-img flex-shrink-0" alt="">
                                                    <div>
                                                        <h3>..</h3>
                                                        <h4>..</h4>
                                                        <div class="stars">
                                                            <i class="bi bi-star-fill"></i><i
                                                                class="bi bi-star-fill"></i><i
                                                                class="bi bi-star-fill"></i><i
                                                                class="bi bi-star-fill"></i><i
                                                                class="bi bi-star-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>
                                                    <i class="bi bi-quote quote-icon-left"></i>
                                                    ..
                                                    <i class="bi bi-quote quote-icon-right"></i>
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- End testimonial item -->

                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                        </div>
                    </section><!-- End Testimonials Section -->

                    <!-- ======= Team Manajer Section ======= -->
                    <section id="team" class="team">
                        <div class="container" data-aos="fade-up">

                            <div class="section-header">
                                <h2>Manajemen BPMSPH</h2>
                            </div>

                            <div class="row gy-5">

                                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                                    <div class="member">
                                        <img src="assets/img/team/Imron.png" class="img-fluid" alt="">
                                        <h4>drh. Imron Suandy, MP</h4>
                                        <span><strong>PLT KEPALA BALAI</strong></span>
                                        <a class="cta-btn" href="https://bpmsph.com/LHKPN%20Iwan%20Dz.pdf"><strong>LHKPN
                                                2022</strong></a>
                                    </div>
                                </div><!-- End Team Member -->

                                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                                    <div class="member">
                                        <img src="assets/img/team/Anik.png" class="img-fluid" alt="">
                                        <h4>drh. Rr Anik Winanningrum</h4>
                                        <span><strong>KEPALA SUBBAGIAN TATA USAHA </strong> 19751221 200801 2 012</span>
                                        <a class="cta-btn" href="https://bpmsph.com/LHKPN%20Anik%20W.pdf"><strong>LHKPN
                                                2022</strong></a>
                                    </div>
                                </div><!-- End Team Member -->

                                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                                    <div class="member">
                                        <img src="assets/img/team/Dian.png" class="img-fluid" alt="">
                                        <h4>drh. Dian Cahyaningsari, M.Si</h4>
                                        <span><strong>SUBKOORDINATOR PELAYANAN TEKNIS </strong> 19810921 200501 2 001
                                        </span>
                                        <a class="cta-btn" href="https://bpmsph.com/LHKPN%20Mas%20Ading.pdf"><strong>LHKPN
                                                2022</strong></a>
                                    </div>
                                </div><!-- End Team Member -->

                                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                                    <div class="member">
                                        <img src="assets/img/team/Wiwit.png" class="img-fluid" alt="">
                                        <h4>drh. Wiwit Subiyanti</h4>
                                        <span><strong>SUBKOORDINATOR PENYIAPAN SAMPEL </strong> 19810221 200801 2
                                            010</span>
                                        <a class="cta-btn"
                                            href="https://bpmsph.com/LHKPN%20Angryani%20Chahyaningtyas.pdf"><strong>LHKPN
                                                2022</strong></a>
                                    </div>
                                </div><!-- End Team Member -->

                            </div>

                        </div>
                    </section><!-- End Team Manajer Section -->

                    <!-- ======= Frequently Asked Questions Section ======= -->
                    <section id="faq" class="faq">
                        <div class="container" data-aos="fade-up">

                            <div class="row gy-4">

                                <div class="col-lg-4">
                                    <div class="content px-xl-5">
                                        <h3>Frequently Asked <strong>Questions</strong></h3>
                                        <br>
                                        <p><strong>Apa itu BPMSPH ?</strong></p>
                                        <p class="justify">Balai Pengujian Mutu dan Sertifikasi Produk Hewan atau
                                            disingkat BPMSPH merupakan Unit Pelaksana Teknis (UPT) Direktorat Jenderal
                                            Peternakan dan Kesehatan Hewan, Kementerian Pertanian yang berada di bawah
                                            dan bertanggung jawab kepada Direktur Jenderal Peternakan dan Kesehatan
                                            Hewan, dan secara teknis dibina oleh Direktur Kesehatan Masyarakat Veteriner
                                            dan Pascapanen.</p>
                                    </div>
                                </div>

                                <div class="col-lg-8">

                                    <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up"
                                        data-aos-delay="100">

                                        <div class="accordion-item">
                                            <h3 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                                    <span class="num">1.</span>
                                                    Sampel apa saja yang dapat diuji di BPMSPH?
                                                </button>
                                            </h3>
                                            <div id="faq-content-1" class="accordion-collapse collapse"
                                                data-bs-parent="#faqlist">
                                                <div class="accordion-body">
                                                    Balai Pengujian Mutu dan Sertifikasi Produk Hewan melakukan
                                                    pengujian terhadap berbagai produk hewan meliputi Daging, Susu,
                                                    Telur, dan produk hewan turunan lainnya.
                                                </div>
                                            </div>
                                        </div><!-- # Faq item-->

                                        <div class="accordion-item">
                                            <h3 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                                    <span class="num">2.</span>
                                                    Berapa tarif untuk setiap sampel yang diuji di BPMSPH?
                                                </button>
                                            </h3>
                                            <div id="faq-content-2" class="accordion-collapse collapse"
                                                data-bs-parent="#faqlist">
                                                <div class="accordion-body">
                                                    Besaran Tarif Pengujian yang ditetapkan berbeda-beda tergantung
                                                    parameter pengujian yang dilakukan. Detail tarif pengujian dapat
                                                    dilihat disini.
                                                </div>
                                            </div>
                                        </div><!-- # Faq item-->

                                        <div class="accordion-item">
                                            <h3 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                                    <span class="num">3.</span>
                                                    Layanan pengujian apa saja yang dilakukan di BPMSPH?
                                                </button>
                                            </h3>
                                            <div id="faq-content-3" class="accordion-collapse collapse"
                                                data-bs-parent="#faqlist">
                                                <div class="accordion-body">
                                                    Secara singkat, layanan uji yang dilakukan oleh Balai Pengujian Mutu
                                                    dan Sertifikasi Produk Hewan meliputi pengujian terhadap Pengujian
                                                    Cemaran Mikroba, Pengujian Laboratorium Bioassay, Pengujian
                                                    Laboratorium Kimia. Selengkapnya bisa dicek disini.
                                                </div>
                                            </div>
                                        </div><!-- # Faq item-->

                                        <div class="accordion-item">
                                            <h3 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                                                    <span class="num">4.</span>
                                                    Bagaimana mekanisme pengambilan hasil pengujian oleh pengguna jasa?
                                                </button>
                                            </h3>
                                            <div id="faq-content-4" class="accordion-collapse collapse"
                                                data-bs-parent="#faqlist">
                                                <div class="accordion-body">
                                                    Hasil pengujian dapat diperoleh setelah pengguna jasa melakukan
                                                    pembayaran dan memberikan bukti pembayaran. Pengambilan hasil
                                                    pengujian dapat dilakukan dengan berbagai cara, antara lain :
                                                    diambil langsung oleh pengguna jasa, melalui surat elektronik
                                                    (e-mail), atau pengiriman melalui Pos.
                                                </div>
                                            </div>
                                        </div><!-- # Faq item-->
                                        <a href="https://bpmsph.com/niagaweb/faq/"
                                            class="btn btn-primary">Selengkapnya</a>


                                    </div>

                                </div>
                            </div>

                        </div>
                    </section><!-- End Frequently Asked Questions Section -->

                    <!-- ======= Contact Section ======= -->
                    <section id="contact" class="contact">
                        <div class="container" data-aos="fade-up">

                            <div class="section-header">
                                <h2>Contact</h2>
                            </div>

                            <div class="row gx-lg-0 gy-4">

                                <div class="col-lg-4">

                                    <div class="info-container">
                                        <div class="info-item d-flex justify-content-center align-items-center">
                                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                                            <div class="">
                                                <h4>Location:</h4>
                                                <p class="text-light">Jl. Pemuda No.29A, Kecamatan Tanah Sareal, Kota
                                                    Bogor, Jawa Barat
                                                    16161</p>
                                            </div>
                                        </div><!-- End Info Item -->

                                        <div class="info-item">
                                            <i class="bi bi-envelope flex-shrink-0"></i>
                                            <div class="">
                                                <h4>Email:</h4>
                                                <p class="text-light">bpmsph@pertanian.go.id</p>
                                            </div>
                                        </div><!-- End Info Item -->

                                        <div class="info-item">
                                            <i class="bi bi-phone flex-shrink-0"></i>
                                            <div>
                                                <h4>Call:</h4>
                                                <p class="text-light">+62 251 8353712</p>
                                            </div>
                                        </div><!-- End Info Item -->

                                        <div class="info-item">
                                            <i class="bi bi-clock flex-shrink-0"></i>
                                            <div class="d-flex flex-column align-items-center justify-content-center">
                                                <h4>Open Hours:</h4>
                                                <p class="text-light">Mon-Thur: 7:30AM - 4PM</p>
                                                <p class="text-light">Friday : 7:30AM - 4:30PM</p>
                                            </div>
                                        </div><!-- End Info Item -->
                                    </div>

                                </div>

                                <div class="col-lg-8">
                                    <form action="forms/contact.php" method="post" role="form"
                                        class="php-email-form">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <input type="text" name="name" class="form-control" id="name"
                                                    placeholder="Nama" required>
                                            </div>
                                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="E-mail" required>
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <textarea class="form-control" name="message" rows="7" placeholder="Pesan" required></textarea>
                                        </div>
                                        <div class="my-3">
                                            <div class="loading">Loading</div>
                                            <div class="error-message"></div>
                                            <div class="sent-message">Pesan mu sudah dikirim. Terima Kasih!</div>
                                        </div>
                                        <div class="text-center"><button type="submit">Kirim Pesan</button></div>
                                    </form>
                                </div><!-- End Contact Form -->

                            </div>

                        </div>
                    </section><!-- End Contact Section -->
                </div>
            </div>
        </section>
    </main><!-- End #main -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
@endsection
