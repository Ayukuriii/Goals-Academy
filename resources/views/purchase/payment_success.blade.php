@extends('purchase.layouts.main')

@section('main')
    <div class="d-flex flex-column align-items-center justify-content-center h-100">
        <h1 class="text-success fst-italic m-0">Pembayaran Berhasil</h1>
        <i class="fs-xl fa-sharp fa-solid fa-circle-check text-success my-4"></i>
        <div class="row col-7">
            <div class="col-8">
                <p class="m-0">Minggu, 28 Februari 2023 | Pukul 10.00 WIB</p>
                <p class="m-0">Metode Pembayaran: Virtual Account BCA</p>
            </div>
            <div class="col text-end">
                <p class="m-0">Kode Pemesanan</p>
                <p class="fw-bold m-0">DSON2302230001</p>
            </div>
        </div>
        <div class="card col-7 flex-column rounded-4 py-3 px-4 my-4">
            <div class="d-flex justify-content-between mb-3">
                <div>
                    <p class="fw-bold m-0 mb-2">Paket Dibimbing Sekali</p>
                    <p class="small m-0">Selasa, 30 Februari 2023 |
                        Pukul 14.00 WIB</p>
                </div>
                <p class="m-0">Rp 43.000</p>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
                <p class="fw-bold m-0">Voucher</p>
                <p class="d-inline-block m-0">- Rp 10.000</p>
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <p class="fw-bold m-0">Total</p>
                <p class="d-inline-block fw-bold text-danger m-0">Rp 33.000</p>
            </div>
        </div>
        <a href="/" class="btn-orange-static fw-bold py-2 px-3">Kembali ke Profil</a>
    </div>
@endsection
