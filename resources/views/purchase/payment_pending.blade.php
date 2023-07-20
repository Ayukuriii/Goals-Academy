@extends('purchase.layouts.main')

@section('main')
    @if (session()->has('response') && session()->has('data'))
        @php
            $response = session('response');
            $data = session('data');
        @endphp
    @endif
    <div class="d-flex flex-column align-items-center justify-content-center h-100">
        <h1 class="text-purple fst-italic m-0 mt-5 mb-2">Menunggu Pembayaran</h1>

        {{-- <i class="fs-xl fa-regular fa-hourglass-half fa-spin text-purple my-4"></i> --}}

        <p class="fs-5 mt-2">Lakukan Pembayaran dalam <span class="text-danger">00:59:59</span></p>

        {{-- <a href="{{ $response->actions[0]->url }}" download="qr-code.png">
            <img src="{{ $response->actions[0]->url }}" alt="{{ $response->actions[0]->name }}">
        </a> --}}

        <a href="{{ asset('image/assets/icons/qr.png') }}" download="qr-code.png">
            <img id="qr-code" class="my-3" width="160px" src="{{ asset('image/assets/icons/qr.png') }}" alt="QR Code">
        </a>

        <p class="mt-2">Cara pembayaran menggunakan QRIS :</p>

        {{-- <ul>
            <li>Buka aplikasi BCA</li>
            <li>Menuju ke menu pembayaran Virtual Account</li>
            <li>
                Masukkan Nomor Virtual Account
                <p title="Copy to clipboard" id="payment-code"
                    class="d-flex gap-2 align-items-center justify-content-center my-3" role="button">
                    <span class="fs-4 fw-bold lh-1">092837254321</span>
                    <i class="d-inline-block fa-regular fa-clipboard fs-5"></i>
                </p>
            </li>
            <li>Klik Bayar</li>
        </ul> --}}

        <ul>
            <li>Download kode QRIS dengan klik gambar QRIS di atas</li>
            <li>Buka OVO, Gojek, Dana, Link Aja, atau aplikasi mobile-banking yang Anda miliki</li>
            <li>Pilih opsi bayar lalu unggah QR Code melalui menu di kanan atas</li>
            <li>Input jumlah nominal yang ingin dibayarkan</li>
            <li>Masukkan nama lengkap Anda lalu eksekusi pembayaran</li>
        </ul>
    </div>
@endsection

@section('script')
    <script>
        // Function copy to clipboard
        const copyToClipboard = (value, callback = null) => {
            // Copy the text inside the text field
            navigator.clipboard.writeText(value);
        }

        const paymentCode = document.querySelector("#payment-code");

        paymentCode.addEventListener('click', e => {
            copyToClipboard(e.target.innerText, alert("Payment code copied!\n"));
        })
    </script>
@endsection
