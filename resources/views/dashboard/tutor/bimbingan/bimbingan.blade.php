@extends('dashboard.layouts.main')

@section('container')
    {{-- {{ dd($collections) }} --}}
    <!-- Isi Page -->
    <section class="container-fluid mb-5" id="user-profile">
        <div class="row mx-0 gap-2">
            @include('dashboard.layouts.sidebar')

            <div class="card col ml-3 p-4 side-program">
                <div class="d-flex justify-content-between">
                    <h3 class="d-inline text-purple fw-bold">Bimbingan</h3>
                    <a href="/tutor/riwayat" class="d-inline btn-outline-orange py-2 px-4 small">Riwayat</a>
                </div>

                <!-- Alert -->
                @if (session()->has('edit-success'))
                    <div class="alert alert-success alert-dismissible fade mt-4 show" role="alert">
                        {{ session('edit-success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session()->has('selesai-success'))
                    <div class="alert alert-info alert-dismissible fade mt-4 show" role="alert">
                        {{ session('selesai-success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="p-2 mt-2">
                    <table id="datatable" class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Tutor</th>
                                <th>Hari/Tanggal</th>
                                <th>Sesi</th>
                                <th>Keterangan</th>
                                <th>Terbuat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                                <tr>
                                    <td>
                                        @if (!$data->orderDetail)
                                            -
                                        @else
                                            @php
                                                $response = json_decode($data->orderDetail->jsonstring);
                                            @endphp
                                            {{ $response->order_id }}
                                        @endif
                                    </td>
                                    <td>{{ $data->user->name }}</td>
                                    <td>{{ $data->program->title }}</td>
                                    <td>{{ $data->tutor->user->name ?? 'Kosong' }}</td>
                                    <td>{{ \Carbon\Carbon::parse($data->date)->isoFormat('dddd, D MMMM Y') }}</td>
                                    <td>{{ $data->program_session }}</td>
                                    <td>
                                        @if (\Carbon\Carbon::now() < $data->date)
                                            AKAN BERLANGSUNG
                                        @elseif (\Carbon\Carbon::now() >= $data->date && \Carbon\Carbon::now() <= \Carbon\Carbon::parse($data->date)->addHour())
                                            BERLANGSUNG
                                        @else
                                            SELESAI
                                        @endif
                                    </td>
                                    <td>
                                        {{ \Carbon\Carbon::parse($data->created_at) }}
                                    </td>
                                    <td class="h4">
                                        <div class="d-flex gap-2">
                                            <a href="/tutor/detail/{{ $data->id }}" class="text-decoration-none">
                                                <i class="bi bi-eye text-dark"></i>
                                            </a>
                                            @if ($data->is_tutor === 0)
                                                <form action="/tutor/selesai/{{ $data->id }}" method="POST">
                                                    @csrf
                                                    @method('put')
                                                    <button type="submit"
                                                        class="text-decoration-none border-0 bg-transparent">
                                                        <i class="bi bi-check-lg text-orange"></i>
                                                    </button>
                                                </form>
                                            @else
                                                <i class="bi bi-check-all fs-4 text-info"></i>
                                            @endif
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
                ],
                order: [
                    [7, 'desc']
                ]
            })
        })
    </script>
@endsection
