@extends('dashboard.layouts.main')

@section('container')
    {{-- {{ dd($collections) }} --}}
    <!-- Isi Page -->
    <section class="d-flex flex-column flex-xl-row container-fluid container-xl gap-3 gap-xl-4" id="user-profile">
        @include('dashboard.user.partials.sidebar')

        <div class="card col-xl p-3 p-md-4 side-program">

            @if ($collections->count())
                <h1 class="card-title">Program Yang Sedang Berlangsung</h1>
                @foreach ($collections as $collection)
                    <div class="card mt-3 border-0">
                        <div class="card product-item justify-content-between">
                            <div class="text-top-product d-flex flex-row justify-content-between">
                                <h3 class="name-product">{{ $collection->program->title }}</h3>
                                @if ($collection->payment_status == 'success')
                                    <p class="status-product fst-italic text-success">{{ $collection->payment_status }}</p>
                                @elseif ($collection->payment_status == 'failed')
                                    <p class="status-product fst-italic text-danger">{{ $collection->payment_status }}</p>
                                @else
                                    <p class="status-product fst-italic">{{ $collection->payment_status }}</p>
                                @endif
                            </div>
                            <div class="text-bottom-product d-flex flex-row justify-content-between">
                                <div class="waktu-product">
                                    <p class="date-product">{{ $datecarbon[$loop->index] }}</p>
                                    <p class="time-product">{{ $collection->program_session }}</p>
                                </div>
                                <p class="detail-product"><a href="/user/{{ $collection->id }}">Lihat Detail</a></p>
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
    </section>
    <!-- Last Page -->
@endsection

@section('script')
    <script>
        const collapseButton = document.querySelector('.card-header i')
        const collapseCard = document.querySelector('#profile')
        collapseButton.addEventListener('click', () => {
            collapseCard.classList.toggle('d-none')
        })
    </script>
@endsection
