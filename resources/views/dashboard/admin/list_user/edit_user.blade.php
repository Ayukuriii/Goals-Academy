@extends('dashboard.layouts.main')

@section('container')
    {{-- {{ dd($collections) }} --}}
    <!-- Isi Page -->
    <section class="container-fluid mb-5" id="user-profile">
        <div class="row gap-2">
            @include('dashboard.layouts.sidebar')

            <div class="card col ml-3 p-4 side-program">
                <div class="d-flex justify-content-between w-75">
                    <h3 class="text-purple fw-bold">Edit User</h3>
                    <a class="d-inline btn-outline-orange py-2 px-4 small" onclick="history.back()"
                        style="cursor: pointer">Back</a>
                </div>

                <!-- Alert -->
                @if (session()->has('update-failed'))
                    <div class="alert alert-danger alert-dismissible fade mt-4 show" role="alert">
                        {{ session('update-failed') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="form w-75 mt-3">
                    <form class="row" action="/admin/tambah_user/update/{{ $data->id }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group col-6 mb-3">
                            <label class="form-label small" for="name">NAMA</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                id="name" value="{{ $data->name }}" placeholder=" " required />
                            @error('')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group
                                col-6 mb-3">
                            <label class="form-label small" for="name">USERNAME</label>
                            <input type="text" name="username"
                                class="form-control @error('username') is-invalid @enderror" id="username"
                                value="{{ $data->username }}" placeholder=" " required />
                            @error('')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group
                                col-6 mb-3">
                            <label class="form-label small" for="university">UNIVERSITAS</label>
                            <input type="text" name="university"
                                class="form-control @error('university') is-invalid @enderror" id="university"
                                value="{{ $data->university }}" placeholder=" " required />
                            @error('')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group
                                col-6 mb-3">
                            <label class="form-label small" for="major">JURUSAN</label>
                            <input type="text" name="major" class="form-control @error('major') is-invalid @enderror"
                                id="major" value="{{ $data->major }}" placeholder=" " required />
                            @error('')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group
                                col-6 mb-3">
                            <label class="form-label small" for="email">EMAIL</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" value="{{ $data->email }}" placeholder=" " required />
                            @error('')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group
                                col-6 mb-3">
                            <label class="form-label small" for="phone_number">NOMOR HP.</label>
                            <input type="text" name="phone_number"
                                class="form-control @error('phone_number') is-invalid @enderror" id="phone_number"
                                value="{{ $data->phone_number }}" placeholder=" " required />
                            @error('')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        @if ($data->user_level !== 'admin')
                            <div class="form-group
                                col-6 mb-3">
                                <label class="form-label small" for="user_level">USER LEVEL</label>
                                <select class="form-select border-orange" name="user_level" id="user_level"
                                    aria-label="Default select example">
                                    <option value="user" {{ $data->user_level == 'user' ? 'selected' : '' }}>User
                                    </option>
                                    <option value="moderator" {{ $data->user_level == 'moderator' ? 'selected' : '' }}>
                                        Moderator</option>
                                    <option value="tutor" {{ $data->user_level == 'tutor' ? 'selected' : '' }}>Tutor
                                    </option>
                                    <option value="admin" {{ $data->user_level == 'admin' ? 'selected' : '' }}>Admin
                                    </option>
                                </select>
                            </div>
                        @else
                            <div class="form-group
                                col-6 mb-3">
                                <label class="form-label small" for="user_level">USER LEVEL</label>
                                <select class="form-select border-orange" name="user_level" id="user_level"
                                    aria-label="Default select example">
                                    <option value="admin" {{ $data->user_level == 'admin' ? 'selected' : '' }}>Admin
                                    </option>
                                </select>
                            </div>
                        @endif
                        <!-- Profile Image -->
                        <div class="form-group col-6 mb-2">
                            <label for="image" class="form-label">Profile Image</label>
                            <input class="form-control @error('image') is-invalid @enderror" type="file"
                                name="image" id="image">
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-button col-6 mb-3 d-flex justify-content-end pt-5">
                            <button class="btn-orange-static px-4 mt-2 d-inline text-end small" id="button"
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
