@extends('dashboard.layouts.main')

@section('container')
    {{-- {{ dd($collections) }} --}}
    <!-- Isi Page -->
    <section class="container mb-5" id="user-profile">
        <div class="row gap-4">

            @include('dashboard.user.partials.sidebar')

            <div class="card col ml-3 p-4 side-program">

                @if ($collections->count())
                    <h1 class="card-title">Program Yang Sedang Berlangsung</h1>
                    @foreach ($collections as $collection)
                        <div class="card mt-3 border-0">
                            <div class="card product-item justify-content-between">
                                <div class="text-top-product d-flex flex-row justify-content-between">
                                    <h3 class="name-product">{{ $collection->program->title }}</h3>
                                    <p class="status-product fst-italic">{{ $collection->payment_status->status }}</p>
                                </div>
                                <div class="text-bottom-product d-flex flex-row justify-content-between">
                                    <div class="waktu-product">
                                        <p class="date-product">{{ $datecarbon[$loop->index] }}</p>
                                        <p class="time-product">{{ $collection->program_session->sesi }}</p>
                                    </div>
                                    <p class="detail-product"><a href="/profile/{{ $collection->id }}">Lihat Detail</a></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <p>Kamu belum bergabung di program apapun</p>
                        <a href="#" class="btn">Cari Program</a>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!-- Last Page -->
@endsection
