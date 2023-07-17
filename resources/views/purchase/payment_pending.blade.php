@extends('purchase.layouts.main')

@section('main')
    <div class="d-flex flex-column align-items-center justify-content-center h-100">
        <h1 class="text-purple fst-italic m-0">Menunggu Pembayaran</h1>
        <i class="fs-xl fa-regular fa-hourglass-half fa-spin text-purple my-4"></i>
        <p class="fs-5">Lakukan Pembayaran dalam <span class="text-danger">00:59:59</span></p>
        <p>Cara pembayaran melalui Virtual Account BCA :</p>
        <ul>
            <li>Buka aplikasi BCA</li>
            <li>Menuju ke menu pembayaran Virtual Account</li>
            <li>
                Masukkan Nomor Virtual Account
                <p title="Copy to clipboard" id="payment-code" class="d-flex gap-2 align-items-center justify-content-center my-3" role="button">
                    <span class="fs-4 fw-bold">092837254321</span>
                    <i class="d-inline-block fa-regular fa-clipboard fs-5"></i>
                </p>
            </li>
            <li>Klik Bayar</li>
        </ul>
    </div>
@endsection

@section('script')
    <script>
        // Function copy to clipboard
        const copyToClipboard = (value, callback=null) => {
            // Copy the text inside the text field
            navigator.clipboard.writeText(value);
        }

        const paymentCode = document.querySelector("#payment-code");

        paymentCode.addEventListener('click', e => {
            copyToClipboard(e.target.innerText, alert("Payment code copied!\n"));
        })
    </script>
@endsection
