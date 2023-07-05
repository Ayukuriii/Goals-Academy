@extends('dashboard.layouts.main')

@section('container')
    {{-- {{ dd($collections) }} --}}
    <!-- Isi Page -->
    <section class="container-fluid mb-5" id="user-profile">
        <div class="row gap-2">
            @include('dashboard.layouts.sidebar')

            <div class="card col ml-3 p-4 side-program">
                <div class="d-flex justify-content-between">
                    <h3 class="d-inline text-purple fw-bold">List User</h3>
                    <a href="{{ route('admin.create') }}" class="d-inline btn-green py-2 px-4 small">Tambah User</a>
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
                            @foreach ($datas as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->university }}</td>
                                    <td>{{ $data->major }}</td>
                                    <td>{{ $data->phone_number }}</td>
                                    <td>{{ $data->user_level }}</td>
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Last Page -->
@endsection
