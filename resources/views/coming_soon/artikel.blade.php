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
    <!-- Social Media -->
    <div class="socmed-container">
        <div class="list-socmed d-flex gap-2 gap-sm-3">
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
    </div>
  </section>
  <!-- Last Page -->
  @endsection
