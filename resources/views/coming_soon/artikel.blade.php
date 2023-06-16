@extends('layouts.main')

@section('container')
{{-- Isi Page --}}
<section class="container text-left" id="segera-hadir">
    <div class="text-left">
      <h3 class="font-weight-bold">Halaman Artikel akan</h3>
      <h1 class="font-weight-bold">Segera Hadir</h1>
    </div>
    <div class="image-content image-comingsoon">
      <img src="image/assets/icons/pesawat-kertas.svg" />
    </div>
    <div class="text-left socmed-text-content mt-5">
      <p>Ikuti kami untuk <br> update informasinya</p>
    </div>
    <div class="socmed-container">
      <div class="list-socmed">
        <!-- Twitter -->
        <div class="socmed socmed-1" style="padding-top: 10px;">
          <img src="image/assets/images/socmed/twitter.svg" />
        </div>
        <!-- Instagram -->
        <div class="socmed socmed-2" style="margin-left:-5px;">
          <a href="instagram.com/goalsacademy_id">
            <img src="image/assets/images/socmed/instagram.svg" />
          </a>
        </div>
        <!-- Tiktok -->
        <div class="socmed socmed-3" style="margin-left: -10px;">
          <a href="https://www.tiktok.com/@goalsacademy_id">
            <img src="image/assets/images/socmed/tiktok.svg" />
          </a>
        </div>
        <!-- Linkedin -->
        <div class="socmed socmed-4" style="padding-top: 13px; margin-left: -5px;">
          <a href="https://www.linkedin.com/company/goals-academy-id/">
            <img src="image/assets/images/socmed/linkedin.svg" />
          </a>
        </div>
        <!-- Youtube -->
        <div class="socmed socmed-5" style="padding-top: 12px;">
          <img src="image/assets/images/socmed/youtube.svg" />
        </div>
        <!-- Facebook -->
        <div class="socmed socmed-6" style="margin-left: -5px;">
          <img src="image/assets/images/socmed/facebook.svg" />

        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- Last Page -->
  @endsection