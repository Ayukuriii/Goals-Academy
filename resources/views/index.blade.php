@extends('layouts.main')

@section('container')
    <!-- Notification Panel -->
    <div class="notification-panel">
        <div class="panel-container">
            <p>Percepat kelulusanmu dengan belajar di Goals Academy<span><a href="goalsacademy.id"
                        alt="">goalsacademy.id</a></span></p>
            <i class="fa-solid fa-xmark" id="button-1"></i>
        </div>
    </div>
    <!-- End Notification Panel -->

    <!-- Toast Login -->
    @if (session()->has('login'))
        <div class="toast-container position-fixed bottom-0 end-0 p-2">
            <div id="myToast" class="toast text-bg-orange border-0" role="alert"
                aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        {!! session('login') !!}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-3 mt-2" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
    @endif

    @if (session()->has('loginError'))
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img rel="prerender" src="..." class="rounded me-2" alt="...">
                <strong class="me-auto">Login Error</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                {{ session('loginError') }}
            </div>
        </div>
    @endif
    <!-- End Toast Register/Login -->

    <!-- Header -->
    <section id="home">
        <div class="hero-container">
            <div class="hero-left-content">
                <h1>Percepat Kelulusanmu <br>Bersama Tutor yang<br>Solutif dan Friendly</h1>

                <p>Buat apa hidup kalau gak berburu diskon,<br>yuk isi emailmu sekarang!</p>
                <!-- <button class="btn hero-btn"><a href="https://wa.me/6282147638286">Daftar Sekarang</a></button> -->

                <form action="/send-email" method="POST">
                    <div class="row input-group mb-3 hero-btn align-items-center justify-content-between">
                        @csrf
                        <div class="col input-group-prepend">
                            <input type="email" class="form-control except" placeholder="Masukkan Email" aria-label="Masukkan Email" aria-describedby="basic-addon2" name="email-code" id="email-diskon" required>
                            <!-- Input Email -->
                        </div>
                        <div class="col input-group-append">
                            <button class="btn-orange-static py-2" style="margin-top: 0" id="dapatkan-diskon" type="submit">Dapatkan Diskon</button>
                            <!-- Button Dapatkan Diskon -->
                        </div>
                    </div>
                </form>

                <div class="hero-image"><img rel="prerender" class="img-fluid" alt=""
                        src="{{ asset('image/assets/images/header/hero-img.png') }}" /></div>
                <!-- Screen > 1000px -->
                <div class="hero-image-mobile"><img rel="prerender" class="img-fluid" alt=""
                        src="{{ asset('image/assets/images/header/hero-img.png') }}" /></div> <!-- Screen < 768px -->
            </div>
    </section>
    <!-- End Header -->

    <!-- Promo -->
    <div class="promo" id="promo">
        <h2><span style="color:#4F3F85;">Terbaru dari Goals Academy</span></h2>
        <div id="swiper-1" class="swipper-container swiper d-none d-md-block">
            <div class="swipe-left">
                <i style="text-shadow: 0 4px 4px rgba(0,0,0,.25)" class="display-5 text-light fa-solid fa-chevron-left" id="button-promo-left" onclick="swipeLeft"></i>
                <!--button klik kiri-->
            </div>
            <div class="swipe-right">
                <i style="text-shadow: 0 4px 4px rgba(0,0,0,.25)" class="display-5 text-light fa-solid fa-chevron-right" id="button-promo-right" onclick="swipeRight"></i>
                <!--button klik kanan-->
            </div>
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="card-image"><img rel="prerender" alt="" src="{{ asset('image/assets/images/banner/banner_1.png') }}" /></div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="card-image"><img rel="prerender" alt="" src="{{ asset('image/assets/images/banner/banner_2.png') }}" />
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="card-image"><img rel="prerender" alt="" src="{{ asset('image/assets/images/banner/banner_3.png') }}" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination">
            </div>
        </div>
        <div id="swiper-2" class="swipper-container swiper d-md-none">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="card-image"><img rel="prerender" alt="" src="{{ asset('image/assets/images/banner/banner_1.png') }}" /></div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="card-image"><img rel="prerender" alt="" src="{{ asset('image/assets/images/banner/banner_2.png') }}" />
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="card-image"><img rel="prerender" alt="" src="{{ asset('image/assets/images/banner/banner_3.png') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Promo -->

    <!-- Reason -->
    <div class="reason-container" id="media">
        <h2>Kenapa memilih Goals Academy?</h2>

        <div class="reason-card-wrapper">
            <div class="reason-card">
                <div class="text-content">
                    <h3>Memiliki Program <br>Solusi <span class="orange">Cepat Lulus</span> <Br>dalam 3 Bulan</h3>

                    <p>Goals Academy memiliki mekanisme <br> penyusunan skripsi yang efektif dan <br> efisien dalam 3
                        bulan.</p>
                </div>

                <div class="image-content image1"><img rel="prerender" alt="" src="{{ asset('image/assets/images/reason/image1.png') }}" />
                </div>
            </div>

            <div class="reason-card">
                <div class="text-content">
                    <h3>Dibimbing oleh<br> Tutor Muda yang <br><span class="orange">Professional dan<br> Friendly</span>
                    </h3>

                    <p>Pembimbing kalian berasal dari <br>kampus terkemuka di Indonesia.</p>
                </div>

                <div class="image-content image2"><img rel="prerender" alt="" src="{{ asset('image/assets/images/reason/image2.png') }}" />
                </div>
            </div>

            <div class="reason-card">
                <div class="text-content">
                    <h3>Mahasiswa Bisa <span class="orange">Mentoring 24/7</span> <br>Melalui Chatting</h3>
                    <p>Bimbingan skripsi jadi lebih asik <br> dan mudah dengan waktu chat <br> dengan Tutor yang
                        fleksibel 24/7.</p>
                </div>

                <div class="image-content image3"><img rel="prerender" alt="" src="{{ asset('image/assets/images/reason/image3.png') }}" />
                </div>
            </div>

            <div class="reason-card">
                <div class="text-content">
                    <h3>Penyusunan Skripsi <span class="orange">Jadi Lebih</span> Mudah <br>dan Cepat</h3>

                    <p>Mahasiswa dapat menyusun skripsi <br> lebih cepat dan mudah dengan<br> program webinar live.</p>
                </div>

                <div class="image-content image4"><img rel="prerender" alt="" src="{{ asset('image/assets/images/reason/image4.png') }}" />
                </div>
            </div>
        </div>
    </div>
    <!-- End Reason -->

    <!-- Product -->
    <div class="product-container" id="product">
        <h2>Pilih Produk Goals Academy <br> untuk solusi skripsimu</h2>
        <div class="swipper-container swiper">
            <div class="slider">
                <div class="card d-flex flex-column flex-md-row align-items-center border-0 rounded-4 gap-4 p-5 p-xl-5 swiper-slide">
                    <div class="col-8 col-md-6 col-xl-5">
                        <img rel="prerender" class="rounded-4 img-fluid" alt="" src="{{ asset('image/assets/images/banner/program_2.png') }}" />
                    </div>
                    <div class="text-center text-md-start">
                        <h3>Dibimbing Sekali</h3>
                        <p>Si introvert yang malu-malu kucing juga bisa konsultasi private sekali bareng Tutor Goals kok. Langsung sikat!</p>
                        <div class="bottom">
                            <button class="btn-orange-static py-2 product-btn btn-pc col-12 col-md-7 col-xl-4" id="join-now-1">Daftar Sekarang</button>
                            <!--button untuk pop up (>768px)-->
                            <button class="btn-orange-static py-2 product-btn btn-mobile col-12">
                                <a class="text-decoration-none text-light" href="/program">Daftar Sekarang</a>
                            </button>
                            <!--button untuk hp (< 485px)-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End Product -->

    <!-- Pop Up Product -->

    <!--Pop Up Product Dibimbing Sekali -->
    <div class="modal-container" id="modal1">
        <div class="modal-content">
            <div class="top-modal">
                <div class="modal-image"><img rel="prerender" class="img-fluid" src="{{ asset('image/assets/images/banner/program_2.png') }}"
                        alt="" />
                </div>

                <div class="modal-text">
                    <h3>Dibimbing Sekali</h3>

                    <h4>Fasilitas yang kamu dapatkan: </h4>

                    <ul>
                        <li>Bimbingan private</li>
                        <li>Pertemuan 1x30 menit</li>
                        <li>Link akses virtual class</li>
                        <li>Komunitas di Telegram</li>
                    </ul>
                </div>
            </div>

            <div class="bottom-modal">
                <h4>Mekanisme Bimbingan: </h4>
                <p>Bimbingan Skripsi dalam waktu yang ditentukan bersama dengan Tutor, Bisa pilih mau online ataupun
                    offline </p>
                <div class="modal-btn-wrapper">
                    <p>Rp 47.000/sesi</p>
                    <div class="kode-btn">
                        <a class="modal-btn btn-pay" href="https://lynk.id/goalsacademy" target="_blank">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pop Up Product Dibimbing Kelompok  -->
    <div class="modal-container" id="modal2">
        <div class="modal-content">
            <div class="top-modal">
                <div class="modal-image"></div>

                <div class="modal-text">
                    <h3>Dibimbing Berkelompok</h3>

                    <h4>Fasilitas yang kamu dapatkan: </h4>

                    <ul>
                        <li>Bimbingan secara intens</li>
                        <li>Pertemuan 9x60 menit</li>
                        <li>Akses webinar skripsi 4x</li>
                        <li>Link akses virtual class</li>
                        <li>Report dan E-certificate</li>
                        <li>Tanya Jawab di grup</li>
                        <li>Komunitas di Telegram</li>
                    </ul>
                </div>
            </div>

            <div class="bottom-modal">
                <div class="modal-btn-wrapper">
                    <p>Rp 925.000</p>
                    <div class="kode-btn">
                        <p id="kode">Masukkan kode "<span style="font-weight: bold;">CEPATLULUS</span>" <br> untuk
                            mendapatkan diskon sebesar 20%)</p>
                        <a class="modal-btn btn-pay" href="https://lynk.id/goalsacademy" target="_blank">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pop Up Product Webinar Skripsi -->
    <div class="modal-container" id="modal3">
        <div class="modal-content">
            <div class="top-modal">
                <div class="modal-image"></div>

                <div class="modal-text">
                    <h3>Webinar Skripsi</h3>

                    <h4>Akses yang didapat:</h4>

                    <ul>
                        <li>Link akses virtual class</li>
                        <li>Group whatsapp bimbingan</li>
                        <li>Direct massage to Tutor 24/7</li>
                        <li>Jaminan tutor friendly dan solutif</li>
                    </ul>
                </div>
            </div>

            <div class="bottom-modal">
                <h4>Mekanisme Bimbingan: </h4>
                <p>Menyusun skripsi bersama-sama dengan teman bisa lebih asik dan mudah dengan
                    dibimbing oleh tutor muda yang solutif dan friendly.</p>
                <div class="modal-btn-wrapper">
                    <p>Rp XXX.000/sesi</p>
                    <a class="modal-btn btn-pay" href="https://lynk.id/goalsacademy" target="_blank">Daftar</a>
                </div>
            </div>
        </div>
    </div>

    <!--Pop Up Dibimbing Gratis-->
    <div class="modal-container" id="modal4">
        <div class="modal-content">
            <div class="top-modal">
                <div class="modal-image"></div>

                <div class="modal-text">
                    <h3>Dibimbing Gratis</h3>

                    <h4>Akses yang didapat:</h4>

                    <ul>
                        <li>Link akses virtual class</li>
                        <li>Group whatsapp bimbingan</li>
                        <li>Direct massage to Tutor 24/7</li>
                        <li>Jaminan tutor friendly dan solutif</li>
                    </ul>
                </div>
            </div>

            <div class="bottom-modal">
                <h4>Mekanisme Bimbingan: </h4>
                <p>Menyusun skripsi bersama-sama dengan teman bisa lebih asik dan mudah dengan
                    dibimbing oleh tutor muda yang solutif dan friendly.</p>
                <div class="modal-btn-wrapper">
                    <p>Rp XXX.000/sesi</p>
                    <a class="modal-btn btn-pay" href="https://lynk.id/goalsacademy" target="_blank">Daftar</a>
                </div>
            </div>
        </div>
    </div>

    <!--Pop Up Product Ebook Skripsi -->
    <div class="modal-container" id="modal5">
        <div class="modal-content">
            <div class="top-modal">
                <div class="modal-image"></div>

                <div class="modal-text">
                    <h3>E-book Skripsi</h3>

                    <h4>Akses yang didapat:</h4>

                    <ul>
                        <li>Link akses virtual class</li>
                        <li>Group whatsapp bimbingan</li>
                        <li>Direct massage to Tutor 24/7</li>
                        <li>Jaminan tutor friendly dan solutif</li>
                    </ul>
                </div>
            </div>

            <div class="bottom-modal">
                <h4>Mekanisme Bimbingan: </h4>
                <p>Menyusun skripsi bersama-sama dengan teman bisa lebih asik dan mudah dengan
                    dibimbing oleh tutor muda yang solutif dan friendly.</p>
                <div class="modal-btn-wrapper">
                    <p>Rp XXX.000/sesi</p>
                    <a class="modal-btn btn-pay" href="https://lynk.id/goalsacademy" target="_blank">Daftar</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Popup Product -->

    <!-- Video -->
    <div class="video-container">
        <h2>Yuk Kenalan Dulu Sama Goals Academy</h2>
        <div class="d-flex justify-content-center">
            <div class="col-10 col-sm-8 col-xl-6">
                <a href="https://youtube.com/shorts/jTsIRfBy-Qs?feature=share" target="_blank">
                    <img rel="prerender" class="w-100" alt="" src="{{ asset('image/assets/icons/video-goals.svg') }}"/>
                </a>
            </div>
        </div>
    </div>
    <!-- End Video -->


    <!-- Daftar Sekarang -->
    <div class="container-fluid container-xl p-4 px-0 px-md-5">
        <div class="daftar-container row">
            <div class="text-daftar col-12 col-md-8 col-xl-9">
                <h3>Klik <span>Tanya Sekarang</span> untuk <span>konsultasi</span> ke kami mengenai rekomendasi program yang cocok buat kamu.</h3>
            </div>
            <div class="col-10 col-sm-6 col-md mt-4 mt-md-0">
                <button type="submit" class="w-100 btn-orange-static py-2">
                    <a href="https://wa.me/6282147638286" alt="">Tanya Sekarang</a>
                </button>
            </div>
        </div>
    </div>
    <!-- End Daftar Sekarang -->

    <!-- Lecturer -->
    <div class="lecturer-container" id="lecturer">
        <h2>Profil Tim Goals Academy</h2>

        <div class="lecturer-card-wrapper">
            <div class="lecturer-card">
                <div class="card-image" id="yor1">
                    <img rel="prerender" src="{{ asset('image\assets\images\lecturer\Rectangle 113.png') }}" alt="" />
                </div>

                <div class="card-text">
                    <p class="lecturer-name">Yordhan Ghalis</p>
                    <span>Chief Executive Officer</span>
                </div>
            </div>

            <div class="lecturer-card">
                <div class="card-image" id="rian1">
                    <img rel="prerender" src="{{ asset('image\assets\images\lecturer\Rectangle 113.png') }}" alt="" />
                </div>

                <div class="card-text">
                    <p class="lecturer-name">Zaini Febrian</p>
                    <span>Chief Product Officer</span>
                </div>
            </div>

            <div class="lecturer-card">
                <div class="card-image" id="pica1">
                    <img rel="prerender" src="{{ asset('image\assets\images\lecturer\Rectangle 113.png') }}" alt="" />
                </div>

                <div class="card-text">
                    <p class="lecturer-name">Fairuzah</p>
                    <span>Chief Financial Officer</span>

                </div>
            </div>

            <div class="lecturer-card">
                <div class="card-image" id="timo1">
                    <img rel="prerender" src="image\assets\images\lecturer\Rectangle 113.png" alt="" />
                </div>

                <div class="card-text">
                    <p class="lecturer-name">Gilbert Timothy</p>
                    <span>Creative Director</span>
                </div>
            </div>
        </div>
    </div>
    <!-- End Lecturer -->

    <!-- FAQ -->
    <div class="faq-container">
        <h2>Frequently Asked Questions (FAQ)</h2>

        <div class="accordion">
            <div class="accordion-item">
                <div class="accordion-item-header" data-toggle="accordion-1">Kak ini programnya online atau offline ya?</div>
                <div class="accordion-item-body" id="accordion-1">
                    <div class="accordion-item-body-content">
                        Kami menyediakan 2 program yaitu offline dan online. Program offline ini diadakan bagi mahasiswa
                        yang bertempatan di Malang dan ingin melakukan bimbingan skripsi secara tatap muka dengan Tutor
                        Goals Academy. Kami juga menyediakan program online bagi mahasiswa yang ingin melakukan
                        bimbingan skripsi secara daring dengan berkelompok maupun individu.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-item-header" data-toggle="accordion-2">Sebulan ada berapa kali bimbingan?</div>
                <div class="accordion-item-body" id="accordion-2">
                    <div class="accordion-item-body-content">
                        Untuk program dibimbing berkelompok dan privat, mahasiswa akan dibimbing 2 hingga 4 kali dalam
                        sebulan sesuai dengan schedule yang telah ditentukan pada saat pengumuman pembagian kelompok dan
                        kesepakatan kalian diawal dengan Tutor Goals Academy.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-item-header" data-toggle="accordion-3">
                    Bimbingannya via apa?
                </div>
                <div class="accordion-item-body" id="accordion-3">
                    <div class="accordion-item-body-content">
                        Ketika bimbingan kami menggunakan aplikasi virtual meeting.
                        Aplikasi virtual meeting adalah aplikasi komunikasi yang menggunakan video.
                        Aplikasi ini bisa digunakan di semua perangkat seperti hp dan laptop.
                        Pastikan juga perangkatmu sudah terkoneksi dengan internet yang stabil agar proses
                        bimbinganmu berjalan dengan lancar.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-item-header" data-toggle="accordion-4">Pembayarannya lewat apa kak?</div>
                <div class="accordion-item-body" id="accordion-4">
                    <div class="accordion-item-body-content">
                        Kami menyediakan pembayaran melalui BCA, BNI, Shopeepay, Dana, dsb
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-item-header" data-toggle="accordion-5">Jurusan yang tersedia untuk apa saja kak?</div>
                <div class="accordion-item-body" id="accordion-5">
                    <div class="accordion-item-body-content">
                        Ilmu Hukum, Pendidikan, Ekonomi dan Bisnis (manajemen, bisnis, akuntansi, ekonomi,
                        administrasi),
                        Sosial dan Politik (Sosiologi, Ilmu Kesejahterhaan Masyarakat, Ilmu Pemerintah, Ilmu Komunikasi,
                        Hubungan Internasional, Ilmu Politik, Psikologi).
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End FAQ -->

    <!-- Social Media -->
    <div class="socmed-container">
        <h2>Ikuti Kami</h2>
        <div class="list-socmed d-flex gap-2 gap-sm-3 justify-content-center">
            {{-- <a class="d-block" href="" target="_blank">
                <img src="{{ asset('image/assets/images/socmed/facebook.png') }}" alt="">
            </a> --}}
            <a class="d-block" href="https://www.instagram.com/goalsacademy_id/" target="_blank">
                <img src="{{ asset('image/assets/images/socmed/instagram.png') }}" alt="">
            </a>
            <a class="d-block" href="https://www.linkedin.com/company/goals-academy-id/" target="_blank">
                <img src="{{ asset('image/assets/images/socmed/linkedin.png') }}" alt="">
            </a>
            <a class="d-block" href="https://www.tiktok.com/@goalsacademy_id" target="_blank">
                <img src="{{ asset('image/assets/images/socmed/tik-tok.png') }}" alt="">
            </a>
            {{-- <a class="d-block" href="" target="_blank">
                <img src="{{ asset('image/assets/images/socmed/youtube.png') }}" alt="">
            </a> --}}
        </div>
    </div>
    <!-- End Social Media -->

    <!-- Quotes -->
    <div class="quotes-container">
        <h2>"Satu Hari Kamu <span>Menunda</span> Penyusunan <span>Skripsi</span><br>
            Sama Aja Kamu <span>Menunda</span> Satu Hari <span>Kesuksesan</span>"</h2>
    </div>
    <!-- End Quotes -->

    <!-- Testimoni -->
    <div class="testimoni-container flex-column flex-xl-row" id="testimoni">
        <div class="title-testimoni">
            <h2 style="color: #ff8854; text-align: left; font-weight: bold;">
                <i class="fa-solid fa-quote-left fa-2xl" style="color: #ff8854;"></i><br>Apa kata
                mereka<br>Tentang<br>Goals Academy
            </h2>
        </div>
        <div class="testimoni-mobile">
            <img rel="prerender" class="img-fluid" src="{{ asset('image/assets/icons/petik.svg') }}" alt=""/>
            <h2>Apa Kata
                Mereka <br>Tentang Goals Academy</h2>
        </div>
        <div class="col-xl-7 testimoni-content">
            <div class="testimoni-cards testimoni-cards-1 d-none d-xl-block">
                <div class="swiper-container swiper" id="swiper-top">
                    <div class="testimoni-slide" id="slide-top">
                        <div class="card-wrapper swiper-wrapper">
                            <div class="test-card card-1 swiper-slide">
                                <div class="card-header">
                                    <p class="bold">&quot;Diluar ekspektasi proposal skripsi aku dapat nilai A walaupun
                                        ada beberapa catatan revisi yang harus diperbaiki&quot;</p>
                                </div>

                                <hr />
                                <div class="card-content">
                                    <div class="user-profile">
                                        <div class="user-img"><img rel="prerender" alt="" class="card-img"
                                                src="{{ asset('image/assets/images/testimoni/rinda.jpg') }}" /></div>

                                        <div class="user-identity">
                                            <p class="bold">Herinda</p>

                                            <p class="major">Informatika</p>
                                        </div>
                                    </div>

                                    <div class="rating">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="test-card swiper-slide">
                                <div class="card-header">
                                    <p class="bold">&quot;Bimbingan sama dospem disuruh ganti judul dan bahkan sering
                                        ganti judul, setelah bimbingan di goals academy jadi paham judul skripsi yang
                                        menarik dan sesuai dengan penelitianku&quot;</p>
                                </div>

                                <hr />
                                <div class="card-content">
                                    <div class="user-profile">
                                        <div class="user-img"><img rel="prerender" alt="" class="card-img"
                                                src="{{ asset('image/assets/images/testimoni/hilda.jpeg') }}" /></div>

                                        <div class="user-identity">
                                            <p class="bold">Hilda</p>

                                            <p class="major">Matematika</p>
                                        </div>
                                    </div>

                                    <div class="rating">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="test-card swiper-slide">
                                <div class="card-header">
                                    <p class="bold">&quot;Sebelum bimbingan di goals academy bingung dan ngga paham sama
                                        sekali terkait penggunaan SPSS, setelah daftar bimbingan dan tutornya simple
                                        banget aku jadi paham terkait SPSS dan aku bisa mulai bimbingan lagi dengan
                                        dospem&quot;</p>
                                </div>

                                <hr />
                                <div class="card-content">
                                    <div class="user-profile">
                                        <div class="user-img"><img rel="prerender" alt="" class="card-img"
                                                src="{{ asset('image/assets/images/testimoni/haris.jpeg') }}" /></div>

                                        <div class="user-identity">
                                            <p class="bold">Haris</p>

                                            <p class="major">Hukum</p>
                                        </div>
                                    </div>

                                    <div class="rating">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="test-card swiper-slide">
                                <div class="card-header">
                                    <p class="bold">&quot;Penyampaian waktu bimbingan mudah dicerna, progress skripsiku
                                        jadi lebih cepat&quot;</p>
                                </div>

                                <hr />
                                <div class="card-content">
                                    <div class="user-profile">
                                        <div class="user-img"><img rel="prerender" alt="" class="card-img"
                                                src="{{ asset('image/assets/images/testimoni/ravly.jpeg') }}" /></div>

                                        <div class="user-identity">
                                            <p class="bold">Ravly</p>

                                            <p class="major">Administrasi Bisnis</p>
                                        </div>
                                    </div>

                                    <div class="rating">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="test-card swiper-slide">
                                <div class="card-header">
                                    <p class="bold">&quot;Alhamdulillah setelah ikut bimbingan di goals academy dapat
                                        inspirasi tentang topik apa yang mau saya bahas untuk dijadikan judul
                                        skripsi&quot;</p>
                                </div>

                                <hr />
                                <div class="card-content">
                                    <div class="user-profile">
                                        <div class="user-img"><img rel="prerender" alt="" class="card-img"
                                                src="{{ asset('image/assets/images/testimoni/wendi.jpeg') }}" /></div>

                                        <div class="user-identity">
                                            <p class="bold">Wendy</p>

                                            <p class="major">Ilmu Kelautan</p>
                                        </div>
                                    </div>

                                    <div class="rating">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimoni-cards testimoni-cards-2 d-none d-xl-block">
                <div class="swiper-container swiper" id="swiper-bottom">
                    <div class="testimoni-slide" id="slide-bottom">
                        <div class="card-wrapper swiper-wrapper">
                            <div class="test-card swiper-slide">
                                <div class="card-header">
                                    <p class="bold">&quot;Tutor di goals academy komunikatif banget dan apa yang
                                        disampaikan mudah dicerna, sehingga aku bisa dengan mudah menemukan kelemahan
                                        diskripsiku&quot;</p>
                                </div>

                                <hr />
                                <div class="card-content">
                                    <div class="user-profile">
                                        <div class="user-img"><img rel="prerender" alt="" class="card-img"
                                                src="{{ asset('image/assets/images/testimoni/ferry.jpeg') }}" /></div>

                                        <div class="user-identity">
                                            <p class="bold">Ferry</p>

                                            <p class="major">Teknik Perkapalan</p>
                                        </div>
                                    </div>

                                    <div class="rating">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="test-card swiper-slide">
                                <div class="card-header">
                                    <p class="bold">&quot;Goals academy ngebantu banget dari yang tadinya masih gelap
                                        mikirin judul, setelah ikut bimbingan dengan tutor di goals academy buat pikiran
                                        jadi terang untuk nentuin judul&quot;</p>
                                </div>

                                <hr />
                                <div class="card-content">
                                    <div class="user-profile">
                                        <div class="user-img"><img rel="prerender" alt="" class="card-img"
                                                src="{{ asset('image/assets/images/testimoni/kafhid.jpeg') }}" /></div>

                                        <div class="user-identity">
                                            <p class="bold">Kafhid</p>

                                            <p class="major">Kimia</p>
                                        </div>
                                    </div>

                                    <div class="rating">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="test-card swiper-slide">
                                <div class="card-header">
                                    <p class="bold">&quot;Setelah ikut bimbingan di goals academy yang sebelumnya belum
                                        kepikiran mau mulai skripsi dari mana, sekarang jadi termotivasi dan paham mau
                                        mulai skripsian dari mana&quot;</p>
                                </div>

                                <hr />
                                <div class="card-content">
                                    <div class="user-profile">
                                        <div class="user-img"><img rel="prerender" alt="" class="card-img"
                                                src="{{ asset('image/assets/images/testimoni/roziqin.jpg') }}" /></div>

                                        <div class="user-identity">
                                            <p class="bold">Akhmad Roziqin</p>

                                            <p class="major">Matematika</p>
                                        </div>
                                    </div>

                                    <div class="rating">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="test-card swiper-slide">
                                <div class="card-header">
                                    <p class="bold">&quot;Sempet bimbingan sama dosen pembimbing yang ke 3x nya dan
                                        stuck di Bab 3, bingung mau revisi mulai dari mana dan takut ngerombak ulang.
                                        Setelah daftar bimbingan skripsi di goals academy kunci permasalahan skripsiku
                                        terjawab dan aku bisa lanjut ngerjain skripsiku&quot;</p>
                                </div>

                                <hr />
                                <div class="card-content">
                                    <div class="user-profile">
                                        <div class="user-img"><img rel="prerender" alt="" class="card-img"
                                                src="{{ asset('image/assets/images/testimoni/ferry.jpeg') }}" /></div>

                                        <div class="user-identity">
                                            <p class="bold">Ferry</p>

                                            <p class="major">Pendidikan IPS</p>
                                        </div>
                                    </div>

                                    <div class="rating">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="test-card swiper-slide">
                                <div class="card-header">
                                    <p class="bold">&quot;Goals academy ngebantu banget dari yang tadinya masih gelap
                                        mikirin judul, setelah ikut bimbingan dengan tutor di goals academy buat pikiran
                                        jadi terang untuk nentuin judul&quot;</p>
                                </div>

                                <hr />
                                <div class="card-content">
                                    <div class="user-profile">
                                        <div class="user-img"><img rel="prerender" alt="" class="card-img"
                                                src="{{ asset('image/assets/images/testimoni/hilda.jpeg') }}" /></div>

                                        <div class="user-identity">
                                            <p class="bold">Zaqya</p>

                                            <p class="major">Fisika</p>
                                        </div>
                                    </div>

                                    <div class="rating">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimoni-cards testimoni-cards-3 d-xl-none">
                <div class="swiper-container swiper" id="swiper-mobile">
                    <div class="testimoni-slide" id="slide-mobile">
                        <div class="card-wrapper swiper-wrapper">
                            <div class="test-card card-1 swiper-slide">
                                <div class="card-header">
                                    <p class="bold">&quot;Diluar ekspektasi proposal skripsi aku dapat nilai A walaupun
                                        ada beberapa catatan revisi yang harus diperbaiki&quot;</p>
                                </div>

                                <hr />
                                <div class="card-content">
                                    <div class="user-profile">
                                        <div class="user-img"><img rel="prerender" alt="" class="card-img"
                                                src="{{ asset('image/assets/images/testimoni/rinda.jpg') }}" /></div>

                                        <div class="user-identity">
                                            <p class="bold">Herinda</p>

                                            <p class="major">Informatika</p>
                                        </div>
                                    </div>

                                    <div class="rating">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="test-card swiper-slide">
                                <div class="card-header">
                                    <p class="bold">&quot;Bimbingan sama dospem disuruh ganti judul dan bahkan sering
                                        ganti judul, setelah bimbingan di goals academy jadi paham judul skripsi yang
                                        menarik dan sesuai dengan penelitianku&quot;</p>
                                </div>

                                <hr />
                                <div class="card-content">
                                    <div class="user-profile">
                                        <div class="user-img"><img rel="prerender" alt="" class="card-img"
                                                src="{{ asset('image/assets/images/testimoni/hilda.jpeg') }}" /></div>

                                        <div class="user-identity">
                                            <p class="bold">Hilda</p>

                                            <p class="major">Matematika</p>
                                        </div>
                                    </div>

                                    <div class="rating">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="test-card swiper-slide">
                                <div class="card-header">
                                    <p class="bold">&quot;Sebelum bimbingan di goals academy bingung dan ngga paham sama
                                        sekali terkait penggunaan SPSS, setelah daftar bimbingan dan tutornya simple
                                        banget aku jadi paham terkait SPSS dan aku bisa mulai bimbingan lagi dengan
                                        dospem&quot;</p>
                                </div>

                                <hr />
                                <div class="card-content">
                                    <div class="user-profile">
                                        <div class="user-img"><img rel="prerender" alt="" class="card-img"
                                                src="{{ asset('image/assets/images/testimoni/haris.jpeg') }}" /></div>

                                        <div class="user-identity">
                                            <p class="bold">Haris</p>

                                            <p class="major">Hukum</p>
                                        </div>
                                    </div>

                                    <div class="rating">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="test-card swiper-slide">
                                <div class="card-header">
                                    <p class="bold">&quot;Penyampaian waktu bimbingan mudah dicerna, progress skripsiku
                                        jadi lebih cepat&quot;</p>
                                </div>

                                <hr />
                                <div class="card-content">
                                    <div class="user-profile">
                                        <div class="user-img"><img rel="prerender" alt="" class="card-img"
                                                src="{{ asset('image/assets/images/testimoni/ravly.jpeg') }}" /></div>

                                        <div class="user-identity">
                                            <p class="bold">Ravly</p>

                                            <p class="major">Administrasi Bisnis</p>
                                        </div>
                                    </div>

                                    <div class="rating">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="test-card swiper-slide">
                                <div class="card-header">
                                    <p class="bold">&quot;Alhamdulillah setelah ikut bimbingan di goals academy dapat
                                        inspirasi tentang topik apa yang mau saya bahas untuk dijadikan judul
                                        skripsi&quot;</p>
                                </div>

                                <hr />
                                <div class="card-content">
                                    <div class="user-profile">
                                        <div class="user-img"><img rel="prerender" alt="" class="card-img"
                                                src="{{ asset('image/assets/images/testimoni/wendi.jpeg') }}" /></div>

                                        <div class="user-identity">
                                            <p class="bold">Wendy</p>

                                            <p class="major">Ilmu Kelautan</p>
                                        </div>
                                    </div>

                                    <div class="rating">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimoni -->
@endsection
