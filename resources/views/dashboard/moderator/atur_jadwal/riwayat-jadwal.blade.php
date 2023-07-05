@extends('dashboard.layouts.main')

@section('container')
    {{-- {{ dd($collections) }} --}}
    <!-- Isi Page -->
    <section class="container-fluid mb-5" id="user-profile">
        <div class="row gap-2">
            @include('dashboard.moderator.partials.sidebar')

            <div class="card col ml-3 p-4 side-program">
                <div class="d-flex justify-content-between">
                    <h3 class="d-inline text-purple fw-bold">Riwayat Jadwal</h3>
                </div>
                <div class="p-2 mt-2">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Hari/Tanggal</th>
                                <th>Sesi</th>
                                <th>Status Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ekadian Haris</td>
                                <td>Dibimbing Sekali</td>
                                <td>Jumat - 04 Juli</td>
                                <td>10.10</td>
                                <td>TERISI</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Last Page -->
@endsection
