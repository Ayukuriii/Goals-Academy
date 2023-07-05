@extends('dashboard.layouts.main')

@section('container')
    {{-- {{ dd($collections) }} --}}
    <!-- Isi Page -->
    <section class="container-fluid mb-5" id="user-profile">
        <div class="row gap-2">
            @include('dashboard.layouts.sidebar')

            <div class="card col ml-3 p-4 side-program">
                <div class="d-flex justify-content-between">
                    <h3 class="d-inline text-purple fw-bold">Atur Jadwal</h3>
                    <a href="#" class="d-inline btn-outline-orange py-2 px-4 small">Riwayat</a>
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
                                <th>Action</th>
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
                                <td class="h4">
                                    <div class="d-flex gap-2">
                                        <a href="/moderator/edit_jadwal" class="text-decoration-none">
                                            <i class="bi bi-pencil-square text-success"></i>
                                        </a>
                                        <a href="#" class="text-decoration-none">
                                            <i class="bi bi-check-lg text-orange"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Akhmad Roziqin</td>
                                <td>Dibimbing Berkelompok</td>
                                <td>Jumat - 04 Juli</td>
                                <td>18.00</td>
                                <td>KOSONG</td>
                                <td class="h4">
                                    <div class="d-flex gap-2">
                                        <a href="/moderator/edit_jadwal" class="text-decoration-none">
                                            <i class="bi bi-pencil-square text-success"></i>
                                        </a>
                                        <a href="#" class="text-decoration-none">
                                            <i class="bi bi-check-lg text-orange"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Last Page -->
   @endsection
