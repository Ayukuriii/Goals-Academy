@extends('dashboard.layouts.main')

@section('container')
    {{-- {{ dd($collections) }} --}}
    <!-- Isi Page -->
    <section class="container-fluid mb-5" id="user-profile">
        <div class="row mx-0 gap-2">
            @include('dashboard.layouts.sidebar')

            <div class="card col ml-3 p-4 side-program">
                <div class="d-flex justify-content-between">
                    <h3 class="d-inline text-purple fw-bold">Artikel</h3>
                    <a href="{{ route('artikel.create') }}" class="d-inline btn-outline-orange py-2 px-4 small">Tambah
                        Artikel</a>
                </div>

                <!-- Alert -->
                {{-- @if (session()->has('update-success'))
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
                @endif --}}

                <div class="p-2 mt-2">
                    <table id="datatable" class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Author</th>
                                <th>Kategori</th>
                                <th>Judul</th>
                                <th>Isi</th>
                                <th>Jam</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->user->name }}</td>
                                    <td>{{ $data->category_id }}</td>
                                    <td>{{ $data->title }}</td>
                                    <td>{{ Str::limit($data->excerpt, 100) }}</td>
                                    <td>{{ Carbon\Carbon::parse($data->published_at)->diffForHumans() }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Last Page -->

    {{-- <script>
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
    </script> --}}
@endsection
