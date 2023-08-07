@extends('dashboard.layouts.main')

@section('container')

    <!-- Isi Page -->
    <section class="d-flex flex-column flex-xl-row container-fluid container-xl gap-3 gap-xl-4" id="user-profile">
        @include('dashboard.user.partials.sidebar')

        <div class="card col-xl p-3 p-md-4 side-program">

            @if ($collections->count() != 0)
                <h1 class="card-title">Program Yang Sedang Berlangsung</h1>
                @foreach ($collections as $collection)
                    @if ($collection)
                        @php
                            $orderDetails = App\Models\OrderDetail::find($collection->order_detail_id);
                            if ($orderDetails) {
                                $json = json_decode($orderDetails->jsonstring);
                                if (isset($json->expiry_time)) {
                                    $jsonTime = $json->expiry_time;
                                } else {
                                    $jsonTime = null; // or provide a default value
                                }
                            } else {
                                $jsonTime = null; // or provide a default value
                            }
                        @endphp
                    @endif

                    <div class="card mt-3 border-0">
                        <div class="card product-item justify-content-between">
                            <div class="text-top-product d-flex flex-row justify-content-between">
                                <h3 class="name-product">{{ $collection->program->title }}</h3>
                                @if ($collection->payment_status == 'success')
                                    <p class="status-product fst-italic text-success">
                                        {{ $collection->payment_status }}
                                    </p>
                                @elseif ($collection->payment_status == 'failed')
                                    <p class="status-product fst-italic text-danger">
                                        {{ $collection->payment_status }}
                                    </p>
                                @else
                                    <p class="status-product fst-italic">
                                        {{-- {{ $json->expiry_time }} --}}
                                        <span class="d-inline-block text-danger text-center"
                                            id="expiry-time-{{ $collection->id }}"> </span>
                                        {{ $collection->payment_status }}
                                    </p>
                                @endif
                            </div>
                            <div class="text-bottom-product d-flex flex-row justify-content-between">
                                <div class="waktu-product">
                                    <p class="date-product">{{ $datecarbon[$loop->index] }}</p>
                                    <p class="time-product">{{ $collection->program_session }}</p>
                                </div>
                                @if ($collection->payment_status == 'success')
                                    <p class="detail-product"><a href="/user/{{ $collection->id }}">Lihat Detail</a></p>
                                @elseif ($collection->payment_status == 'pending')
                                    <p class="detail-product"><a href="/payment_pending/{{ $collection->id }}">Lihat
                                            Detail</a></p>
                                @else
                                    <p class="detail-product"><a href="/user/{{ $collection->id }}">Lihat Detail</a></p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <p class="fs-6">Kamu belum bergabung di program apapun</p>
                    <a href="/program" class="btn-orange-static py-2 px-4">Cari Program</a>
                </div>
            @endif
        </div>
    </section>
    <!-- Last Page -->
@endsection

@section('script')
    @foreach ($collections as $collection)
        @php
            $orderDetails = App\Models\OrderDetail::find($collection->order_detail_id);
            $jsonTime = null; // Inisialisasi jsonTime di setiap iterasi
            if ($orderDetails) {
                $json = json_decode($orderDetails->jsonstring);
                if (isset($json->expiry_time)) {
                    $jsonTime = $json->expiry_time;
                }
            }
        @endphp
        @if ($jsonTime)
            <script>
                // Generate Expiry Time Countdown for this specific iteration
                const expiryTimeElement{{ $collection->id }} = document.querySelector("#expiry-time-{{ $collection->id }}");
                const expiryTime{{ $collection->id }} = moment("{{ $jsonTime }}");

                countdown(expiryTimeElement{{ $collection->id }}, expiryTime{{ $collection->id }});
            </script>
        @endif
    @endforeach
@endsection
