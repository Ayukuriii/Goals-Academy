@extends('purchase.layouts.main')

@section('css')
    <style>
        @media (max-width: 400px) {
            #payment-success p {
                font-size: 0.75rem;
            }
        }
    </style>
@endsection

@section('main')
    <div id="payment-success" class="d-flex flex-column align-items-center justify-content-center px-3 px-md-0 h-100">
        <h1 class="text-success fst-italic m-0 mt-5">Pembayaran Berhasil</h1>
        <i class="fs-xl fa-sharp fa-solid fa-circle-check text-success my-4"></i>
        <div class="row col-12 col-md-7 d-none d-md-flex">
            <div class="col-8">
                {{-- <p class="m-0">Minggu, 28 Februari 2023 | Pukul 10.00 WIB</p> --}}
                <p class="m-0">{{ \Carbon\Carbon::parse($response->transaction_time)->isoFormat('dddd, D MMMM Y | HH:mm') }} WIB</p>
                <p class="m-0">Metode Pembayaran: {{ ucwords($response->payment_type) }}</p>
            </div>
            <div class="col text-end">
                <p class="m-0">Kode Pemesanan</p>
                <p class="fw-bold m-0">{{ $response->order_id }}</p>
            </div>
        </div>
        <div class="d-md-none fw-bold text-center">
            {{-- <p class="m-0">Minggu, 28 Februari 2023 | Pukul 10.00 WIB</p> --}}
            <p class="m-0">{{ $response->transaction_time }}</p>
            <p class="m-0">Metode Pembayaran: {{ $response->payment_type }}</p>
            <p class="fw-bold m-0">{{ $response->order_id }}</p>
        </div>
        <div class="card col-12 col-md-7 flex-column rounded-4 py-3 px-4 my-4">
            <div class="d-flex justify-content-between mb-3">
                <div>
                    <p class="fw-bold m-0 mb-2">
                        {{
                            $data->program_services_id == 1 ? 'Paket Dibimbing Online' : (
                                $data->program_services_id == 2 ? 'Paket Dibimbing Online Premium' : (
                                    $data->program_services_id == 3 ? 'Paket Dibimbing Sekali' : ''
                                )
                            )
                        }}
                    </p>
                    <p class="small m-0">{{ \Carbon\Carbon::parse($data->date)->isoFormat('dddd, D MMMM Y') }} |
                        Pukul {{ $data->program_session }} WIB</p>
                </div>
                <p class="m-0">Rp {{ $response->gross_amount }}</p>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
                <p class="fw-bold m-0">Voucher</p>
                <p class="d-inline-block m-0">0.00</p>
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <p class="fw-bold m-0">Total</p>
                <p class="d-inline-block fw-bold text-danger m-0">Rp {{ $response->gross_amount }}</p>
            </div>
        </div>
        <a href="/" class="btn-orange-static fw-bold py-2 px-3">Kembali ke Profil</a>
    </div>
@endsection
