@extends('dashboard.layouts.main')

@section('container')
    <!-- convert json ke string -->
    @php
        $json = json_decode($data->orderDetail->jsonstring);
    @endphp

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
                        <td>
                            {{ strtoupper($json->payment_type) }}
                        </td>
                    </tr>
                    <tr>
                        <td>KODE PEMESANAN</td>
                        <td>{{ $json->order_id }}</td>
                    </tr>
                    <tr>
                        <td>STATUS</td>
                        @if ($data->payment_status == 'success')
                            <td class="text-success">{{ $data->payment_status }}</td>
                        @elseif ($data->payment_status == 'failed')
                            <td class="text-danger">{{ $data->payment_status }}</td>
                        @else
                            <td class="text-secondary">{{ $data->payment_status }}</td>
                        @endif
                    </tr>
                    <tr>
                        <td>TUTOR</td>
                        <td>{{ $data->tutor->user->name ?? 'Kosong' }}</td>
                    </tr>
                    <tr>
                        <td>JADWAL</td>
                        <td>{!! $datecarbon . '<br>' . $data->program_session !!}</td>
                    </tr>
                    <tr>
                        <td>PELAKSANAAN</td>
                        <td>{{ $data->program->category }}</td>
                    </tr>
                    <tr>

                        @if ($data->program->category == 'offline')
                            <td>TEMPAT</td>
                            <td>{{ $data->links }}</td>
                        @else
                            <td>LINK</td>
                            <td>
                                @if ($data->links == null)
                                    Link belum di atur.
                                @else
                                    <a
                                        href="{{ strpos($data->links, 'http') === 0 ? $data->links : 'https://' . $data->links }}">Link
                                        Zoom</a>
                                @endif
                            </td>
                        @endif
                    </tr>
                    <tr>
                        <td>LAMPIRAN SKRIPSI</td>
                        <td>
                            <a href="/download/bimbingan/{{ $data->file }}">{{ $data->alias }}</a>
                        </td>
                    </tr>
                    <tr>
                        <td>LAMPIRAN TUTOR</td>
                        <td>
                            <a
                                href="/download/tutor/{{ optional($data->tutor_notes->first())->file }}">{{ optional($data->tutor_notes->first())->alias }}</a>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="">
                <h5>Pesan dari kamu</h5>
                <p class="fs-6">{{ $data->catatan }}</p>
            </div>
            <div class="">
                <h5>Catatan dari tutor</h5>
                <p class="fs-6">{{ optional($data->tutor_notes->first())->body }}</p>
            </div>

        </div>
    </section>
    <!-- Last Page -->
@endsection
