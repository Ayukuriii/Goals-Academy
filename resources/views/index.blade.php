@extends('layouts.main')

@section('container')
	<!-- Notification Panel -->
	<div class="notification-panel">
		<div class="panel-container">
			<p>Percepat kelulusanmu dengan belajar di Goals Academy<span><a href="goalsacademy.id" alt="">goalsacademy.id</a></span></p>
			<i class="fa-solid fa-xmark" id="button-1"></i>
		</div>
	</div>
	<!-- End Notification Panel -->

	
	<!-- Toast Register/Login -->
	@if (session()->has('success'))
	<div class="toast-container position-fixed top-1 end-0 p-3">
		<div id="myToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
			<div class="d-flex">
			  <div class="toast-body">
				{{ session('success') }}
			  </div>
			  <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
			</div>
		  </div>
	</div>		
	@endif

	@if (session()->has('login'))
	<div class="toast-container position-fixed top-1 end-0 p-3">
		<div id="myToast" class="toast align-items-center text-bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
			<div class="d-flex">
			  <div class="toast-body">
				{{ session('login') }}
			  </div>
			  <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
			</div>
		  </div>
	</div>
	@endif

	@if (session()->has('loginError'))
	<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
		<div class="toast-header">
			<img src="..." class="rounded me-2" alt="...">
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
				
				<div class="input-group mb-3 hero-btn">
					<input type="text" class="form-control" placeholder="Masukkan Email" aria-label="Masukkan Email"
						aria-describedby="basic-addon2" id="email-diskon"> <!--Input Email -->
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" id="dapatkan-diskon" type="button">Dapatkan Diskon
							></button> <!--Button Dapatkan Diskon-->
					</div>
				</div>

				<div class="hero-image"><img class="img-fluid" alt="" src="image/assets/images/header/hero-img.png" /></div>
				<!-- Screen > 1000px -->
				<div class="hero-image-mobile"><img class="img-fluid" alt=""
						src="image/assets/images/header/hero-img.png" /></div> <!-- Screen < 768px -->
			</div>
	</section>
	<!-- End Header -->

	<!-- Pop-Up Diskon -->
	<div class="modal" id="popup-diskon">
		<img class="img-fluid popup-diskon-dekstop" src="image/assets/images/header/popup-diskon-10.png" alt="" />
		<!--Pamflet Popup Tab/Laptop-->
		<img class="img-fluid popup-diskon-mobile" src="image/assets/images/header/popup-diskon-mobile.png" alt="" />
		<!--Pamflet Popup Hp -->
		<!-- <i class="fas fa-times fs-1" id="close-icon"></i> -->
	</div>

	<!-- Promo -->
	<div class="promo" id="promo">
		<h1><span style="color:#4F3F85;">Terbaru dari Goals Academy</span></h1>
		<div class="swipper-container swiper">
			<div class="swipe-left">
				<img src="image/assets\images\promo\left-arrow.png" id="button-promo-left" onclick="swipeLeft">
				<!--button klik kiri-->
			</div>
			<div class="swipe-right">
				<img src="image/assets\images\promo\left-arrow.png" id="button-promo-right" onclick="swipeRight">
				<!--button klik kanan-->
			</div>
			<div class="slide-content">
				<div class="card-wrapper swiper-wrapper">
					<div class="card swiper-slide">
						<div class="card-image"><img alt="" src="image/assets/images/banner/banner_1.png" /></div>
					</div>

					<div class="card swiper-slide">
						<div class="card-image"><img alt="" src="image/assets/images/banner/banner_2.png" /></div>
					</div>

					<div class="card swiper-slide">
						<div class="card-image"><img alt="" src="image/assets/images/banner/banner_3.png" /></div>
					</div>
				</div>
			</div>

			<div class="swiper-pagination">
			</div>
		</div>
	</div>
	<!-- End Promo -->


	<!-- Reason -->
	<div class="reason-container" id="media">
		<h1>Kenapa memilih Goals Academy?</h1>

		<div class="reason-card-wrapper">
			<div class="reason-card">
				<div class="text-content">
					<h3>Memiliki Program <br>Solusi <span class="orange">Cepat Lulus</span> <Br>dalam 3 Bulan</h3>

					<p>Goals Academy memiliki mekanisme <br> penyusunan skripsi yang efektif dan <br> efisien dalam 3
						bulan.</p>
				</div>

				<div class="image-content image1"><img alt="" src="image/assets/images/reason/image1.png" /></div>
			</div>

			<div class="reason-card">
				<div class="text-content">
					<h3>Dibimbing oleh<br> Tutor Muda yang <br><span class="orange">Professional dan<br> Friendly</span>
					</h3>

					<p>Pembimbing kalian berasal dari <br>kampus terkemuka di Indonesia.</p>
				</div>

				<div class="image-content image2"><img alt="" src="image/assets/images/reason/image2.png" /></div>
			</div>

			<div class="reason-card">
				<div class="text-content">
					<h3>Mahasiswa Bisa <span class="orange">Mentoring 24/7</span> <br>Melalui Chatting</h3>
					<p>Bimbingan skripsi jadi lebih asik <br> dan mudah dengan waktu chat <br> dengan Tutor yang
						fleksibel 24/7.</p>
				</div>

				<div class="image-content image3"><img alt="" src="image/assets/images/reason/image3.png" /></div>
			</div>

			<div class="reason-card">
				<div class="text-content">
					<h3>Penyusunan Skripsi <span class="orange">Jadi Lebih</span> Mudah <br>dan Cepat</h3>

					<p>Mahasiswa dapat menyusun skripsi <br> lebih cepat dan mudah dengan<br> program webinar live.</p>
				</div>

				<div class="image-content image4"><img alt="" src="image/assets/images/reason/image4.png" /></div>
			</div>
		</div>
	</div>
	<!-- End Reason -->

	<!-- Product -->
	<div class="product-container" id="product">
		<h1>Pilih Produk Goals Academy <br> untuk solusi skripsimu</h1>
		<!-- <div class="list-product">
		<button class="button-product" data-slide="1">Dibimbing Sekali</button>
		<button class="button-product" data-slide="2">Dibimbing Kelompok</button>
		<button class="button-product" data-slide="3">Webinar Skripsi</button>
		<button class="button-product" data-slide="4">Dibimbing Gratis</button>
		<button class="button-product" data-slide="5">E-book Skripsi</button>
	</div> -->
		<div class="swipper-container swiper">
			<!-- <div class="swipe-left">
		<img src="image\assets\images\promo\left-arrow.png" id="button-product-left" onclick="swipeLeft">
	</div>
	<div class="swipe-right">
		<img src="image\assets\images\promo\left-arrow.png" id="button-product-right" onclick="swipeRight">
	</div> -->
			<div class="slider">
				<!-- <div class="card-wrapper swiper-wrapper"> -->
				<div class="product-card card-1 swiper-slide"> <!-- Product Card 1-->
					<div class="product-image"><img class="img-fluid" alt=""
							src="image/assets/images/banner/program_2.png" /></div>
					<div class="card-content">
						<h3>Dibimbing Sekali</h3>
						<p>Si introvert yang malu-malu kucing juga bisa konsultasi private sekali bareng Tutor Goals
							kok. Langsung sikat!</p>
						<div class="bottom">
							<button class="btn product-btn btn-pc" id="join-now-1">Daftar Sekarang</button>
							<!--button untuk pop up (>768px)-->
							<button class="btn product-btn btn-mobile"><a class="links-hidden"
									href="dibimbing-sekali.html">Daftar Sekarang</a></button>
							<!--button untuk hp (< 485px)-->
						</div>
					</div>
				</div>

				<!-- <div class="product-card card-2 swiper-slide" id="dibimbingberkelompok">
			<div class="product-image"><img class="img-fluid" alt="" src="image/assets/images/banner/program_3.png"/></div>
			 <div class="card-content">
				<h3>Dibimbing Berkelompok</h3>
				<p>Lulus cepet bareng bestie itu idaman gak sih? Coba bimbingan rame-rame, cuma 3 bulan bisa kelar skripsi bareng Tutor idaman kalian!</p>
				<div class="bottom">
					<button class="btn product-btn btn-pc" id="join-now-2">Daftar Sekarang</button>
					<button class="btn product-btn btn-mobile"><a class="links-hidden" href="dibimbing-kelompok.html">Daftar Sekarang</a></button></div>
				</div>
		</div>
		<div class="product-card card-3 swiper-slide" id="webinarskripsi">
			<div class="product-image"><img class="img-fluid" alt="" src="image/assets/images/banner/program_1.png"/></div>
			 <div class="card-content">
				<h3>Webinar Skripsi</h3>
				<p>Skripsi kelar hanya gara-gara dengerin Tutor bahas materi lewat layar kalian loh, yuk ikut sekarang!</p>
				<div class="bottom">
					<button class="btn product-btn btn-pc" id="join-now-3">Cek Jadwal</button>
					<button class="btn product-btn btn-mobile"><a class="links-hidden" href="dibimbing-sekali.html">Cek Jadwal</a></button></div>
				</div>
		</div>
		<div class="product-card card-4 swiper-slide" id="dibimbinggratis">
			<div class="product-image"><img class="img-fluid" alt="" src="image/assets/images/banner/program_1.png"/></div>
			 <div class="card-content">
				<h3>Dibimbing Gratis</h3>
				<p>Eh apanih? Coba bimbingan yuk, siapa tau kamu tercerahkan sama yang gratis-gratis. Eits, tapi kuotanya terbatas ya</p>
				<div class="bottom">
					<button class="btn product-btn btn-pc" id="join-now-4">Daftar Sekarang</button>
					<button class="btn product-btn btn-mobile"><a class="links-hidden" href="dibimbing-sekali.html">Daftar Sekarang</a></button></div>
				</div>
		</div>
		<div class="product-card card-5 swiper-slide" id="ebookskripsi">
			<div class="product-image"><img class="img-fluid" alt="" src="image/assets/images/banner/program_1.png"/></div>
			 <div class="card-content">
				<h3>E-book Skripsi</h3>
				<p>Baca e-booknya biar skripsimu cepet kelar. Sssttt, banyak tipsnya loh!</p>
				<div class="bottom">
					<button class="btn product-btn btn-pc" id="join-now-5">Selengkapnya</button>
					<button class="btn product-btn btn-mobile"><a class="links-hidden" href="dibimbing-sekali.html">Selengkapnya</a></button></div>
				</div> -->
				<!-- </div> -->
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
				<div class="modal-image"><img class="img-fluid" src="image/assets/images/banner/program_2.png" alt="" />
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
		<h1>Yuk Kenalan Dulu Sama Goals Academy</h1>
		<div class="video-content">
			<table>
				<tr>
					<td>
						<div class="video-1"><a href="https://youtube.com/shorts/jTsIRfBy-Qs?feature=share">
								<img alt="" src="image/assets/icons/video-goals.svg" width="805px" height="474px" /></a>
						</div>
					</td>
					<!-- <div class="video-2">
			<td>
				<li style="list-style: none;" id="list-video">
				<ul id="items-video"><img alt="" src="assets/icons/video-logo.jpeg" width="250px" height="140px"/></ul>
				<ul id="items-video"><img alt="" src="assets/icons/video-logo.jpeg" width="250px" height="140px"/></ul>
				<ul id="items-video"><img alt="" src="assets/icons/video-logo.jpeg" width="250px" height="140px"/></ul>
			</li>
			</td> -->
					<!-- </div> -->
				</tr>
			</table>
		</div>
	</div>
	<!-- End Video -->


	<!-- Daftar Sekarang -->
	<div class="daftar-container">
		<div class="text-daftar">
			<h3>Klik <span>Tanya Sekarang</span> untuk <span>konsultasi</span> ke kami <br>
				mengenai rekomendasi program<br> yang cocok buat kamu.</h3>
		</div>
		<button type="submit" class="btn btn-center"><a href="https://wa.me/6282147638286" alt="">Tanya
				Sekarang</a></button>
	</div>
	<!-- End Daftar Sekarang -->

	<!-- Lecturer -->
	<div class="lecturer-container" id="lecturer">
		<h1>Profil Tim Goals Academy</h1>

		<div class="lecturer-card-wrapper">
			<div class="lecturer-card">
				<div class="card-image" id="yor1">
					<img src="image\assets\images\lecturer\Rectangle 113.png" alt="" />
				</div>

				<div class="card-text">
					<p class="lecturer-name">Yordhan Ghalis</p>
					<span>Chief Executive Officer</span>
				</div>
			</div>

			<div class="lecturer-card">
				<div class="card-image" id="rian1">
					<img src="image\assets\images\lecturer\Rectangle 113.png" alt="" />
				</div>

				<div class="card-text">
					<p class="lecturer-name">Zaini Febrian</p>
					<span>Chief Product Officer</span>
				</div>
			</div>

			<div class="lecturer-card">
				<div class="card-image" id="pica1">
					<img src="image\assets\images\lecturer\Rectangle 113.png" alt="" />
				</div>

				<div class="card-text">
					<p class="lecturer-name">Fairuzah</p>
					<span>Chief Financial Officer</span>

				</div>
			</div>

			<div class="lecturer-card">
				<div class="card-image" id="timo1">
					<img src="image\assets\images\lecturer\Rectangle 113.png" alt="" />
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
		<h1>Frequently Asked Questions (FAQ)</h1>

		<div class="accordion">
			<div class="accordion-item">
				<div class="accordion-item-header">Kak ini programnya online atau offline ya?</div>
				<div class="accordion-item-body">
					<div class="accordion-item-body-content">
						Kami menyediakan 2 program yaitu offline dan online. Program offline ini diadakan bagi mahasiswa
						yang bertempatan di Malang dan ingin melakukan bimbingan skripsi secara tatap muka dengan Tutor
						Goals Academy. Kami juga menyediakan program online bagi mahasiswa yang ingin melakukan
						bimbingan skripsi secara daring dengan berkelompok maupun individu.
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<div class="accordion-item-header">Sebulan ada berapa kali bimbingan?</div>
				<div class="accordion-item-body">
					<div class="accordion-item-body-content">
						Untuk program dibimbing berkelompok dan privat, mahasiswa akan dibimbing 2 hingga 4 kali dalam
						sebulan sesuai dengan schedule yang telah ditentukan pada saat pengumuman pembagian kelompok dan
						kesepakatan kalian diawal dengan Tutor Goals Academy.
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<div class="accordion-item-header">
					Bimbingannya via apa?
				</div>
				<div class="accordion-item-body">
					<div class="accordion-item-body-content">
						<ul style="padding-left: 1rem">
							Ketika bimbingan kami menggunakan aplikasi virtual meeting.
							Aplikasi virtual meeting adalah aplikasi komunikasi yang menggunakan video.
							Aplikasi ini bisa digunakan di semua perangkat seperti hp dan laptop.
							Pastikan juga perangkatmu sudah terkoneksi dengan internet yang stabil agar proses
							bimbinganmu berjalan dengan lancar.
						</ul>
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<div class="accordion-item-header">Pembayarannya lewat apa kak?</div>
				<div class="accordion-item-body">
					<div class="accordion-item-body-content">
						Kami menyediakan pembayaran melalui BCA, BNI, Shopeepay, Dana, dsb
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<div class="accordion-item-header">Jurusan yang tersedia untuk apa saja kak?</div>
				<div class="accordion-item-body">
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
		<h1>Ikuti Kami</h1>
		<div class="list-socmed">
			<!-- Twitter -->
			<div class="socmed socmed-1">
				<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="60" height="60" viewBox="0 0 48 48">
					<path fill="#03a9f4" d="M24 4A20 20 0 1 0 24 44A20 20 0 1 0 24 4Z"></path>
					<path fill="#fff"
						d="M36,17.12c-0.882,0.391-1.999,0.758-3,0.88c1.018-0.604,2.633-1.862,3-3 c-0.951,0.559-2.671,1.156-3.793,1.372C31.311,15.422,30.033,15,28.617,15C25.897,15,24,17.305,24,20v2c-4,0-7.9-3.047-10.327-6 c-0.427,0.721-0.667,1.565-0.667,2.457c0,1.819,1.671,3.665,2.994,4.543c-0.807-0.025-2.335-0.641-3-1c0,0.016,0,0.036,0,0.057 c0,2.367,1.661,3.974,3.912,4.422C16.501,26.592,16,27,14.072,27c0.626,1.935,3.773,2.958,5.928,3c-1.686,1.307-4.692,2-7,2 c-0.399,0-0.615,0.022-1-0.023C14.178,33.357,17.22,34,20,34c9.057,0,14-6.918,14-13.37c0-0.212-0.007-0.922-0.018-1.13 C34.95,18.818,35.342,18.104,36,17.12">
					</path>
				</svg>
			</div>
			<!-- Facebook -->
			<div class="socmed socmed-2">
				<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="60" height="60" viewBox="0 0 48 48">
					<linearGradient id="Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1" x1="9.993" x2="40.615" y1="9.993"
						y2="40.615" gradientUnits="userSpaceOnUse">
						<stop offset="0" stop-color="#2aa4f4"></stop>
						<stop offset="1" stop-color="#007ad9"></stop>
					</linearGradient>
					<path fill="url(#Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1)"
						d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z"></path>
					<path fill="#fff"
						d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z">
					</path>
				</svg>
			</div>
			<!-- Instagram -->
			<div class="socmed socmed-3" style="padding: 5px;">
				<a href="instagram.com/goalsacademy_id">
					<img src="image/assets/icons/logo-ig.png" alt="" width="48" height="48">
				</a>
			</div>
			<!-- Linkedin -->
			<div class="socmed socmed-4">
				<a href="https://www.linkedin.com/company/goals-academy-id/">
					<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="63" height="63" viewBox="0 0 48 48">
						<path fill="#0288D1"
							d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z">
						</path>
						<path fill="#FFF"
							d="M12 19H17V36H12zM14.485 17h-.028C12.965 17 12 15.888 12 14.499 12 13.08 12.995 12 14.514 12c1.521 0 2.458 1.08 2.486 2.499C17 15.887 16.035 17 14.485 17zM36 36h-5v-9.099c0-2.198-1.225-3.698-3.192-3.698-1.501 0-2.313 1.012-2.707 1.99C24.957 25.543 25 26.511 25 27v9h-5V19h5v2.616C25.721 20.5 26.85 19 29.738 19c3.578 0 6.261 2.25 6.261 7.274L36 36 36 36z">
						</path>
					</svg>
				</a>
			</div>
			<!-- Tiktok -->
			<div class="socmed socmed-5">
				<a href="https://www.tiktok.com/@goalsacademy_id">
					<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="55" height="55" viewBox="0 0 50 50">
						<path
							d="M41,4H9C6.243,4,4,6.243,4,9v32c0,2.757,2.243,5,5,5h32c2.757,0,5-2.243,5-5V9C46,6.243,43.757,4,41,4z M37.006,22.323 c-0.227,0.021-0.457,0.035-0.69,0.035c-2.623,0-4.928-1.349-6.269-3.388c0,5.349,0,11.435,0,11.537c0,4.709-3.818,8.527-8.527,8.527 s-8.527-3.818-8.527-8.527s3.818-8.527,8.527-8.527c0.178,0,0.352,0.016,0.527,0.027v4.202c-0.175-0.021-0.347-0.053-0.527-0.053 c-2.404,0-4.352,1.948-4.352,4.352s1.948,4.352,4.352,4.352s4.527-1.894,4.527-4.298c0-0.095,0.042-19.594,0.042-19.594h4.016 c0.378,3.591,3.277,6.425,6.901,6.685V22.323z">
						</path>
					</svg>
				</a>
			</div>
			<!-- Youtube -->
			<div class="socmed socmed-6">
				<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="70" height="68" viewBox="0 0 48 48">
					<path fill="#FF3D00"
						d="M43.2,33.9c-0.4,2.1-2.1,3.7-4.2,4c-3.3,0.5-8.8,1.1-15,1.1c-6.1,0-11.6-0.6-15-1.1c-2.1-0.3-3.8-1.9-4.2-4C4.4,31.6,4,28.2,4,24c0-4.2,0.4-7.6,0.8-9.9c0.4-2.1,2.1-3.7,4.2-4C12.3,9.6,17.8,9,24,9c6.2,0,11.6,0.6,15,1.1c2.1,0.3,3.8,1.9,4.2,4c0.4,2.3,0.9,5.7,0.9,9.9C44,28.2,43.6,31.6,43.2,33.9z">
					</path>
					<path fill="#FFF" d="M20 31L20 17 32 24z"></path>
				</svg>
			</div>
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
	<div class="testimoni-container" id="testimoni">
		<div class="title-testimoni">
			<h1 style="color: #ff8854; text-align: left; font-weight: bold;">
				<i class="fa-solid fa-quote-left fa-2xl" style="color: #ff8854;"></i><br>Apa kata
				mereka<br>Tentang<br>Goals Academy
			</h1>
		</div>
		<div class="testimoni-mobile">
			<img class="img-fluid" src="image/assets/icons/petik.svg" alt="" />
			<h1 style="text-align: left;color: #ff8854;font-weight: bold;font-size: 20px;padding-left: 10px;">Apa Kata
				Mereka <br>Tentang Goals Academy</h1>
		</div>
		<div class="testimoni-content">
			<div class="testimoni-cards testimoni-cards-1">
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
										<div class="user-img"><img alt="" class="card-img"
												src="image/assets/images/testimoni/rinda.jpg" /></div>

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
										<div class="user-img"><img alt="" class="card-img"
												src="image/assets/images/testimoni/hilda.jpeg" /></div>

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
										<div class="user-img"><img alt="" class="card-img"
												src="image/assets/images/testimoni/haris.jpeg" /></div>

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
										<div class="user-img"><img alt="" class="card-img"
												src="image/assets/images/testimoni/ravly.jpeg" /></div>

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
										<div class="user-img"><img alt="" class="card-img"
												src="image/assets/images/testimoni/wendi.jpeg" /></div>

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

			<div class="testimoni-cards testimoni-cards-2">
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
										<div class="user-img"><img alt="" class="card-img"
												src="image/assets/images/testimoni/ferry.jpeg" /></div>

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
										<div class="user-img"><img alt="" class="card-img"
												src="image/assets/images/testimoni/kafhid.jpeg" /></div>

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
										<div class="user-img"><img alt="" class="card-img"
												src="image/assets/images/testimoni/maudy.png" /></div>

										<div class="user-identity">
											<p class="bold">Maudy Ayunda</p>

											<p class="major">Statistika</p>
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
										<div class="user-img"><img alt="" class="card-img"
												src="image/assets/images/testimoni/maudy.png" /></div>

										<div class="user-identity">
											<p class="bold">Maudy Ayunda</p>

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
										<div class="user-img"><img alt="" class="card-img"
												src="image/assets/images/testimoni/maudy.png" /></div>

										<div class="user-identity">
											<p class="bold">Maudy Ayunda</p>

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

							<div class="test-card swiper-slide">
								<div class="card-header">
									<p class="bold">&quot;Goals academy ngebantu banget dari yang tadinya masih gelap
										mikirin judul, setelah ikut bimbingan dengan tutor di goals academy buat pikiran
										jadi terang untuk nentuin judul&quot;</p>
								</div>

								<hr />
								<div class="card-content">
									<div class="user-profile">
										<div class="user-img"><img alt="" class="card-img"
												src="image/assets/images/testimoni/maudy.png" /></div>

										<div class="user-identity">
											<p class="bold">Maudy Ayunda</p>

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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Testimoni -->

@endsection