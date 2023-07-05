@extends('dashboard.layouts.main')

@section('container')
    {{-- {{ dd($collections) }} --}}
    <!-- Isi Page -->
    <section class="container-fluid mb-5" id="user-profile">
        <div class="row gap-2">
            @include('dashboard.admin.partials.sidebar')

            <div class="card col ml-3 p-4 side-program">
                <div class="d-flex justify-content-between">
                    <h3 class="d-inline text-purple fw-bold">Riwayat Bimbingan</h3>
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
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ekadian Haris</td>
                                <td>Dibimbing Sekali</td>
                                <td>Jumat - 04 Juli</td>
                                <td>10.10</td>
                                <td>SELESAI</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Akhmad Roziqin</td>
                                <td>Dibimbing Berkelompok</td>
                                <td>Jumat - 04 Juli</td>
                                <td>18.00</td>
                                <td>SELESAI</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Last Page -->
@endsection
