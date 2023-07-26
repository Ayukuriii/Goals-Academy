@extends('layouts.main')

@section('container')
<!-- Isi Page -->
<section id="program" class="my-5 pt-5">
    <<div class="container justify-content-center align-items-center">
        <h1 class="text-purple fw-bold text-center mb-5">Program Goals Academy</h1>
        <div id="program-list">
            <div class="row flex-row card rounded-4 p-3">
                <div class="col-4 p-0 mb-3">
                    <img class="w-100 rounded-4" src="{{ asset('image/assets/images/banner/program_2.png') }}" alt="Poster  Dibimbing Sekali">
                </div>
                <div class="col-8 p-3">
                    <h2 class="text-purple h4">Dibimbing Sekali</h2>
                    <p style="text-align: justify">Bimbingan skripsi individu untuk mahasiswa tingkat akhir yang dilaksanakan secara offline maupun online.  Fasilitas yang didapatkan yaitu Lorem ipsum dolor sit amet, consectetur adipiscing elit, seddoeiu smod tempor incididunt ut labore et dolore magna aliqua.Ut enim adm minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliq uip ex ea commodo consequat. Duis aute irure dolor in reprehenderitin vol.</p>
                </div>
                <div class="col-6 d-flex p-0 align-items-center">
                    <p class="text-danger h5">Mulai dari <b>Rp 199.000/sesi</b></p>
                </div>
                <div class="col-6 text-end p-0">
                    <a href="/purchase" class="d-inline-block btn-orange-static fw-bold p-3">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Last Page -->
@endsection
