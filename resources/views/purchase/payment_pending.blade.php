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

        <p class="fs-5 mt-2">Lakukan Pembayaran dalam <span class="d-inline-block text-danger text-center" style="width: 80px" id="expiry-time"></span></p>

        {{-- <a href="{{ $response->actions[0]->url }}" download="qr-code.png">
            <img src="{{ $response->actions[0]->url }}" alt="{{ $response->actions[0]->name }}">
        </a> --}}

        <a href="{{ $response->actions[0]->url }}" download="qr-code.png">
            <img id="qr-code" class="my-3" width="160px" src="{{ $response->actions[0]->url }}" alt="QR Code">
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
        // const copyToClipboard = (value, callback = null) => {
        //     // Copy the text inside the text field
        //     navigator.clipboard.writeText(value);
        // }

        const expiryTimeElement = document.querySelector("#expiry-time");
        const expiryTime = moment("{{ $response->expiry_time }}")

        const options = {
            year: "2-digit",
            month: "2-digit",
            day: "2-digit",
            hour: "2-digit",
            minute: "2-digit",
            timeZoneName: "short",
        };

        const dateTime = new Intl.DateTimeFormat("en-US", options).format;

        const updateExpiryTime = setInterval(() => {
            const difference = expiryTime.diff(moment());
            if (difference <= 1) {
                clearInterval(updateExpiryTime);
                expiryTimeElement.innerText = "00:00:00";
            } else {
                const hours = Math.floor(difference  / (1000*60*60));
                const minutes = Math.floor(difference % (1000*60*60) / (1000*60));
                const seconds = Math.floor(difference % (1000*60*60) % (1000*60) / (1000));

                const countdown = moment();
                countdown.hours(hours);
                countdown.minutes(minutes);
                countdown.seconds(seconds);

                expiryTimeElement.innerText = countdown.format("HH:mm:ss");
            }
        }, 1000);

        updateExpiryTime();

        // const paymentCode = document.querySelector("#payment-code");

        // paymentCode.addEventListener("click", e => {
        //     copyToClipboard(e.target.innerText, alert("Payment code copied!\n"));
        // })
    </script>
@endsection
