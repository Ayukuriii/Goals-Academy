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

                <!-- Alert -->
                <div class="alert alert-info alert-dismissible fade mt-4 show" role="alert">
                    Message appear here
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <div class="p-2 mt-2 table-responsive">
                    <table id="datatable" class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Universitas</th>
                                <th>Jurusan</th>
                                <th>Nomor Hp.</th>
                                <th>User Level</th>
                                <th>Action</th>
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
                                            <a href="/admin/tambah_user/edit/{{ $data->id }}" class="text-decoration-none">
                                                <i class="bi bi-pencil-square text-success"></i>
                                            </a>
                                            <button type="submit" class="text-decoration-none border-0 bg-transparent" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $data->id }}">
                                                <i class="bi bi-trash3 text-orange"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="deleteModal{{ $data->id }}" tabindex="-1" aria-labelledby="deleteModal{{ $data->id }}Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="deleteModal{{ $data->id }}Label">Delete Data</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apakah Anda yakin ingin menghapus data dengan email : {{ $data->email }}?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <form action="/admin/{{ $data->id }}/destroy" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
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
