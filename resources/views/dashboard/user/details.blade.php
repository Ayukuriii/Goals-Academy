@extends('dashboard.layouts.main')

@section('container')
    {{-- {{ dd($data->tutor_notes) }} --}}
    <!-- Isi Page -->
    <section class="d-flex flex-column flex-xl-row container-fluid container-xl gap-3 gap-xl-4" id="user-profile">
        @include('dashboard.user.partials.sidebar')

        <div class="card col ml-3 side-program p-3 p-md-4">
            <h1 class="card-title">{{ $data->program->title }}</h1>
            <table class="table">
                <tbody>
                    <tr>
                        <td>PEMBELIAN</td>
                        <td>{{ $datepurchased }}</td>
                    </tr>
                    <tr>
                        <td>METODE PEMBAYARAN</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>KODE PEMESANAN</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>STATUS</td>
                        <td>{{ $data->payment_status->status }}</td>
                    </tr>
                    <tr>
                        <td>MENTOR</td>
                        <td>{{ $data->tutor->name }}</td>
                    </tr>
                    <tr>
                        <td>JADWAL</td>
                        <td>{!! $datecarbon . '<br>' . $data->program_session->sesi !!}</td>
                    </tr>
                    <tr>
                        <td>PELAKSANAAN</td>
                        <td>Online</td>
                    </tr>
                    <tr>
                        <td>TEMPAT</td>
                        <td><a
                                href="{{ strpos($data->links, 'http') === 0 ? $data->links : 'https://' . $data->links }}">Link
                                Zoom</a></td>
                    </tr>
                </tbody>
            </table>

            <div class="">
                <h5>Catatan dari tutor</h5>
                <p>{{ optional($data->tutor_notes->first())->body }}</p>
            </div>

        </div>
    </section>
    <!-- Last Page -->
@endsection
