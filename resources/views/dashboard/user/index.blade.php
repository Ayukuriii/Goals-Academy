@extends('dashboard.user.layouts.main')

@section('container')
    {{-- {{ ddd($ongoing) }} --}}
    <!-- Isi Page -->
    <section id="user-profile" class="mb-3">
        <sidebar>
        <div class="row d-flex justify-content-center mx-auto">
            <div class="col side-profile card py-5 px-4 d-flex flex-direction-column justify-content-center">
                <div class="card-image pb-4 mx-auto">
                    <img src="{{ asset('image/assets/images/login/profile-grey.png') }}" />
                </div>
                <a href="#" class="btn mx-auto fw-bold">Edit Profil</a>
                <div class="card-body">
                    <p class="card-title">Nama</p>
                    <h5 id="nama-user">{{ $posts['name'] }}</h5>
                    <p class="card-title">Email</p>
                    <h5 id="email-user">{{ $posts['email'] }}</h5>
                    <p class="card-title">No. Telepon</p>
                    <h5 id="notelp-user">{{ $posts['phone_number'] }}</h5>
                    <p class="card-title">Universitas</p>
                    <h5 id="univ-user">{{ $posts['university'] }}</h5>
                    <p class="card-title">Jurusan</p>
                    <h5 id="jurusan-user">{{ $posts['major'] }}</h5>
                </div>
            </div>
        </sidebar>

        {{-- content --}}
            <div class="card col ml-3 p-4 side-program">
                
                @if ($collections->count())
                <h1 class="card-title">Program Yang Sedang Berlangsung</h1>
                @foreach ($collections as $collection)    
                <div class="card-body mt-3">
                    <div class="card product-item justify-content-between">
                        <div class="text-top-product d-flex flex-row justify-content-between">
                        <h3 class="name-product">{{ $collection->program->title }}</h3>
                        <p class="status-product fst-italic">{{ $collection->payment_status->status }}</p>
                    </div>
                    <div class="text-bottom-product d-flex flex-row justify-content-between">
                        <div class="waktu-product">
                            <p class="date-product">{{ $collection->date }}</p>
                            <p class="time-product">{{ $collection->program_session->sesi }}</p>
                        </div>
                        <p class="detail-product"><a href="">Lihat Detail</a></p>
                    </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                    <p >Kamu belum bergabung di program apapun</p>
                    <a href="#" class="btn">Cari Program</a>
                </div>
                @endif
            </div>
        </div>
    </section>
    <!-- Last Page -->
   @endsection