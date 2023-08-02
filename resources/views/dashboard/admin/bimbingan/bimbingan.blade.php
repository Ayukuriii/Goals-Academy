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
                    <a href="/admin/riwayat_bimbingan" class="d-inline btn-outline-orange py-2 px-4 small">Riwayat</a>
                </div>

                <!-- Alert -->
                @if (session()->has('update-success'))
                    <div class="alert alert-success alert-dismissible fade mt-4 show" role="alert">
                        <i class="bi bi-check-circle-fill"></i>
                        {{ session('update-success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session()->has('update-error'))
                    <div class="alert alert-danger alert-dismissible fade mt-4 show" role="alert">
                        {{ session('update-success') }}
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
                                <th>Link/Tempat</th>
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
                                        @if ($data->program->category == 'online' && $data->links !== null)
                                            <a
                                                href="{{ strpos($data->links, 'http') === 0 ? $data->links : 'https://' . $data->links }}">
                                                Link
                                            </a>
                                        @elseif ($data->program->category == 'offline')
                                            {{ $data->links }}
                                        @else
                                            -
                                        @endif
                                    </td>
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
                                    <td>
                                        {{ \Carbon\Carbon::parse($data->created_at) }}
                                    </td>
                                    <td class="h4">
                                        <div class="d-flex gap-2">
                                            <a href="https://wa.me/+62{{ ltrim($data->user->phone_number, '0') }}"
                                                target="_blank" class="text-decoration-none">
                                                <i class="bi bi-whatsapp text-success"></i>
                                            </a>
                                            <a href="/admin/bimbingan/show/{{ $data->id }}"
                                                class="text-decoration-none">
                                                <i class="bi bi-pencil-square text-success"></i>
                                            </a>
                                            <a href="/admin/bimbingan/detail/{{ $data->id }}"
                                                class="text-decoration-none">
                                                <i class="bi bi-eye text-dark"></i>
                                            </a>
                                            <form action="/admin/bimbingan/selesai/{{ $data->id }}" method="POST">
                                                @csrf
                                                @method('put')
                                                <button type="submit" class="text-decoration-none border-0 bg-transparent">
                                                    <i class="bi bi-check-all text-orange"></i>
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
                    [9, 'desc']
                ]
            })
        })
    </script>
@endsection
