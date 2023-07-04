@extends('dashboard.layouts.main')

@section('container')
    {{-- {{ dd($collections) }} --}}
    <!-- Isi Page -->
    <section class="container mb-5" id="user-profile">
        <div class="row gap-2">
            @include('dashboard.admin.layouts.sidebar')

            <div class="card col ml-3 p-4 side-program">
                <div class="d-flex justify-content-between">
                    <h3 class="d-inline text-purple fw-bold">List User</h3>
                    <a href="/admin/tambah_user" class="d-inline btn-green py-2 px-4 small">Tambah User</a>
                </div>
                <div class="p-2 mt-2 table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Universitas</th>
                                <th>Jurusan</th>
                                <th>Nomor Hp.</th>
                                <th>User Level</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ekadian Haris</td>
                                <td>ekadianharis@gmail.com</td>
                                <td>Politeknik Negeri Malang</td>
                                <td>Elektronika</td>
                                <td>087763420873</td>
                                <td>Admin</td>
                                <td class="h4">
                                    <div class="d-flex gap-2">
                                        <a href="#" class="text-decoration-none">
                                            <i class="bi bi-pencil-square text-success"></i>
                                        </a>
                                        <a href="#" class="text-decoration-none">
                                            <i class="bi bi-trash3 text-orange"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Akhmad Roziqin</td>
                                <td>roziqinakhmad14juli@gmail.com</td>
                                <td>UIN Maulana Malik Ibrahim Malang</td>
                                <td>Matematika</td>
                                <td>085331090425</td>
                                <td>User</td>
                                <td class="h4">
                                    <div class="d-flex gap-2">
                                        <a href="#" class="text-decoration-none">
                                            <i class="bi bi-pencil-square text-success"></i>
                                        </a>
                                        <a href="#" class="text-decoration-none">
                                            <i class="bi bi-trash3 text-orange"></i>
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
