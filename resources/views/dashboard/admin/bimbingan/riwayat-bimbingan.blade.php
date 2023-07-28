@extends('dashboard.layouts.main')

@section('container')
    {{-- {{ dd($collections) }} --}}
    <!-- Isi Page -->
    <section class="container-fluid mb-5" id="user-profile">
        <div class="row mx-0 gap-2">
            @include('dashboard.layouts.sidebar')

            <div class="card col ml-3 p-4 side-program">
                <div class="d-flex justify-content-between">
                    <h3 class="d-inline text-purple fw-bold">Riwayat Bimbingan</h3>
                    <a class="d-inline btn-outline-orange py-2 px-4 small" onclick="history.back()"
                        style="cursor: pointer">Back</a>
                </div>
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
                                <th>T</th>
                                <th>M</th>
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
                                        @if ($data->is_tutor == false)
                                            <i class="bi bi-dash fs-4 text-orange"></i>
                                        @else
                                            <i class="bi bi-check fs-4 text-orange"></i>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->is_moderator == false)
                                            <i class="bi bi-dash fs-4 text-orange"></i>
                                        @else
                                            <i class="bi bi-check fs-4 text-orange"></i>
                                        @endif
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($data->created_at) }}</td>
                                    <td class="h4">
                                        <div class="d-flex gap-2">
                                            <a href="/admin/riwayat_bimbingan_detail/{{ $data->id }}"
                                                class="text-decoration-none">
                                                <i class="bi bi-eye text-dark"></i>
                                            </a>
                                            <form action="/admin/bimbingan/restore/{{ $data->id }}" method="POST">
                                                @csrf
                                                @method('put')
                                                <button type="submit" class="text-decoration-none border-0 bg-transparent">
                                                    <i class="bi bi-reply-fill text-orange"></i>
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
                ],
                order: [
                    [8 , 'desc']
                ]
            })
        })
    </script>
@endsection
