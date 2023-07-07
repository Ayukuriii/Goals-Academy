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
                    <a href="/moderator/riwayat_jadwal" class="d-inline btn-outline-orange py-2 px-4 small">Riwayat</a>
                </div>

                <!-- Alert -->
                <div class="alert alert-info alert-dismissible fade mt-4 show" role="alert">
                    Message appear here
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <div class="p-2 mt-2">
                    <table id="datatable" class="table">
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
                                            <a href="/moderator/{{ $data->id }}/edit" class="text-decoration-none">
                                                <i class="bi bi-pencil-square text-success"></i>
                                            </a>
                                            <form action="/moderator/{{ $data->id }}/selesai" method="POST">
                                                @csrf
                                                @method('put')
                                                <button type="submit" class="text-decoration-none border-0 bg-transparent">
                                                    <i class="bi bi-check-lg text-orange"></i>
                                                </button>
                                            </form>
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

    <script>
        $('document').ready(function() {
            $('#datatable').DataTable({
                'processing': true,
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf'
                ]
            })
        })
    </script>
@endsection
