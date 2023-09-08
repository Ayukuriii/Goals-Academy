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

        @if (isset($response->expiry_time))
            <p class="fs-5 mt-2">Lakukan Pembayaran dalam <span class="d-inline-block text-danger text-center" style="width: 80px" id="expiry-time"></span></p>
        @endif

        @if (isset($response->actions))
            <img title="Download QR Code" id="qr-code" class="my-3" style="cursor: pointer;" width="160px" src="{{ $response->actions[0]->url }}" alt="QR Code" onclick="saveFile(`{{ $response->actions[0]->url }}`)">
        @endif

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
    @if (isset($response->expiry_time))
        <script>
            const expiryTimeElement = document.querySelector("#expiry-time");
            const expiryTime = moment("{{ $response->expiry_time }}")
            countdown(expiryTimeElement, expiryTime);

            // Function copy to clipboard
            // const copyToClipboard = (value, callback = null) => {
            //     // Copy the text inside the text field
            //     navigator.clipboard.writeText(value);
            // }

            // const paymentCode = document.querySelector("#payment-code");

            // paymentCode.addEventListener("click", e => {
            //     copyToClipboard(e.target.innerText, alert("Payment code copied!\n"));
            // })
        </script>
    @endif
    <script>
        // Cek status every second
        const id = window.location.href.split('/')[window.location.href.split('/').length-1]

        const checkPaymentStatus = setInterval(() => {
            $.ajax({
                type: "get",
                url: "/api/check_status",
                success: function (response) {
                    if (response['transaction_status'] == 'success') {
                        clearInterval(checkPaymentStatus)
                        $.ajax({
                            type: "post",
                            url: "/api/handle_payment",
                            data: response,
                            dataType: "json",
                            success: function (response) {
                                window.location.href = `/payment_success/${id}`
                            }
                        });
                    } else {
                        $.ajax({
                            type: "post",
                            url: "/api/handle_payment",
                            data: response,
                            dataType: "json",
                            success: function (response) {
                                console.log(response['message'])
                            }
                        });
                    }
                }
            });
        }, 2000);

        checkPaymentStatus()
    </script>
@endsection
