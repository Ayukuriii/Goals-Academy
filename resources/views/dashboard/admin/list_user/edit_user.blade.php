@extends('dashboard.layouts.main')

@section('container')
    {{-- {{ dd($collections) }} --}}
    <!-- Isi Page -->
    <section class="container-fluid mb-5" id="user-profile">
        <div class="row gap-2">
            @include('dashboard.layouts.sidebar')

            <div class="card col ml-3 p-4 side-program">
                <h3 class="text-purple fw-bold">Edit User</h3>
                <div class="form w-75 mt-3">
                    <form class="row" action="/admin/tambah_user/update/{{ $data->id }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group col-6 mb-3">
                            <label class="form-label small" for="name">NAMA</label>
                            <input type="text" name="name" class="form-control" id="name"
                                value="{{ $data->name }}" placeholder=" " required />
                        </div>
                        <div class="form-group col-6 mb-3">
                            <label class="form-label small" for="name">USERNAME</label>
                            <input type="text" name="username" class="form-control" id="username"
                                value="{{ $data->username }}" placeholder=" " required />
                        </div>
                        <div class="form-group col-6 mb-3">
                            <label class="form-label small" for="university">UNIVERSITAS</label>
                            <input type="text" name="university" class="form-control" id="university"
                                value="{{ $data->university }}" placeholder=" " required />
                        </div>
                        <div class="form-group col-6 mb-3">
                            <label class="form-label small" for="major">JURUSAN</label>
                            <input type="text" name="major" class="form-control" id="major"
                                value="{{ $data->major }}" placeholder=" " required />
                        </div>
                        <div class="form-group col-6 mb-3">
                            <label class="form-label small" for="email">EMAIL</label>
                            <input type="email" name="email" class="form-control" id="email"
                                value="{{ $data->email }}" placeholder=" " required />
                        </div>
                        <div class="form-group col-6 mb-3">
                            <label class="form-label small" for="phone_number">NOMOR HP.</label>
                            <input type="text" name="phone_number" class="form-control" id="phone_number"
                                value="{{ $data->phone_number }}" placeholder=" " required />
                        </div>
                        <div class="form-group col-6 mb-3">
                            <label class="form-label small" for="user_level">USER LEVEL</label>
                            <select class="form-select border-orange" name="user_level" id="user_level"
                                aria-label="Default select example">
                                <option value="user" selected>User</option>
                                <option value="moderator">Moderator</option>
                                <option value="tutor">Tutor</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="form-group col-6 mb-3">
                            <label class="form-label small" for="password">PASSWORD</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder=" "
                                required />
                        </div>
                        <div class="form-button col-12 mb-3 d-flex justify-content-end">
                            <button class="btn-orange-static px-4 d-inline text-end small" id="button"
                                type="submit" disabled>Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Last Page -->
@endsection
