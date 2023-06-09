@extends('layouts.main')

@section('container')
    <!-- Isi Page -->
    <section id="user-profile">
        <sidebar>
        <div class="row d-flex justify-content-center mx-auto">
            <div class="col side-profile card py-5 px-4 d-flex flex-direction-column justify-content-center">
                <div class="card-image pb-4 mx-auto">
                    <img src="./assets/images/login/profile-grey.png" />
                </div>
                <a href="#" class="btn mx-auto fw-bold">Edit Profil</a>
                <div class="card-body">
                    <p class="card-title">Nama</p>
                    <h5 id="nama-user">Hilda Zaqya</h5>
                    <p class="card-title">Email</p>
                    <h5 id="email-user">hildazaqyaelnaz@gmail.com</h5>
                    <p class="card-title">No. Telepon</p>
                    <h5 id="notelp-user">085929858278</h5>
                    <p class="card-title">Universitas</p>
                    <h5 id="univ-user">UIN Malang</h5>
                    <p class="card-title">Jurusan</p>
                    <h5 id="jurusan-user">Matematika</h5>
                </div>
            </div>
        </sidebar>
            <div class="card col ml-3 p-4 side-program">
                <h1 class="card-title">Program Yang Sedang Berlangsung</h1>
                <div class="card-body mt-3">
                    <div class="card product-item justify-content-between">
                        <div class="text-top-product d-flex flex-row justify-content-between">
                        <h3 class="name-product">Dibimbing Sekali</h3>
                        <p class="status-product fst-italic">Menunggu Pembayaran</p>
                    </div>
                    <div class="text-bottom-product d-flex flex-row justify-content-between">
                        <div class="waktu-product">
                            <p class="date-product">Kamis, 20 Februari 2023</p>
                            <p class="time-product">14.10 - 15.10 WIB</p>
                        </div>
                        <p class="detail-product"><a href="">Lihat Detail</a></p>
                    </div>
                    </div>
                </div>
                <!-- <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                <p >Kamu belum bergabung di program apapun</p>
                <a href="#" class="btn">Cari Program</a>
            </div> -->
            </div>
        </div>
    </section>
    <!-- Last Page -->
   @endsection