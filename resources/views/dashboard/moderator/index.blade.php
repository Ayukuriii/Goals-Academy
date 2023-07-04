@extends('dashboard.layouts.main')

@section('container')
    {{-- {{ dd($collections) }} --}}
    <!-- Isi Page -->
    <section class="container mb-5" id="user-profile">
        <div class="row gap-2">
            @include('dashboard.moderator.partials.sidebar')

            <div class="card col ml-3 p-4 side-program">
                <h3 class="text-purple fw-bold">Selamat datang di Dashboard $user->moderator</h3>
                <div class="row gap-4 p-2">
                    <div
                        class="col-3 gap-3 d-flex text-center align-items-center justify-content-center d-inline-block border rounded py-4 px-3">
                        <div class="d-inline-block text-warning h1 mx-0"><i class="bi bi-exclamation-lg"></i></div>
                        <div class="d-inline-block h3">5</div>
                        <div class="d-inline-block w-75 text-start">Link Masih Kosong</div>
                    </div>
                    <div
                        class="col-3 gap-3 d-flex text-center align-items-center justify-content-center d-inline-block border rounded py-4 px-3">
                        <div class="d-inline-block text-info h1 mx-0"><i class="bi bi-check-all"></i></div>
                        <div class="d-inline-block h3">10</div>
                        <div class="d-inline-block w-75 text-start">Total Bimbingan</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Last Page -->
@endsection
