@extends('dashboard.layouts.main')

@section('container')
    {{-- {{ dd($collections) }} --}}
    <!-- Isi Page -->
    <section class="container-fluid mb-5" id="user-profile">
        <div class="row gap-2">
            @include('dashboard.admin.partials.sidebar')

            <div class="card col ml-3 p-4 side-program">
                <div class="d-flex justify-content-between">
                    <h3 class="d-inline text-purple fw-bold">Atur Jadwal</h3>
                    <a href="/admin/riwayat_jadwal" class="d-inline btn-outline-orange py-2 px-4 small">Riwayat</a>
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
                            @foreach ($datas as $data)
                                {{-- {{ dd($data) }} --}}
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->user->name }}</td>
                                    <td>{{ $data->program->title }}</td>
                                    <td>{{ \Carbon\Carbon::parse($data->date)->toFormattedDateString() }}</td>
                                    <td>{{ $data->program_session->sesi }}</td>
                                    <td>
                                        @if ($data->links === null)
                                            KOSONG
                                        @else
                                            TERISI
                                        @endif
                                    </td>
                                    <td class="h4">
                                        <div class="d-flex gap-2">
                                            <a href="/admin/edit_jadwal" class="text-decoration-none">
                                                <i class="bi bi-pencil-square text-success"></i>
                                            </a>
                                            <a href="#" class="text-decoration-none">
                                                <i class="bi bi-check-lg text-orange"></i>
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
