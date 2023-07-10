@extends('dashboard.layouts.main')

@section('container')
    {{-- {{ dd($collections) }} --}}
    <!-- Isi Page -->
    <section class="container-fluid mb-5" id="user-profile">
        <div class="row gap-2">
            @include('dashboard.layouts.sidebar')

            <div class="card col ml-3 p-4 side-program">
                <div class="d-flex justify-content-between w-75">
                    <h3 class="text-purple fw-bold">Tambah User</h3>
                    <a class="d-inline btn-outline-orange py-2 px-4 small" onclick="history.back()"
                        style="cursor: pointer">Back</a>
                </div>
                @if (session()->has('create-failed'))
                    <div class="alert alert-danger alert-dismissible fade mt-4 show" role="alert">
                        {{ session('create-failed') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="form w-75 mt-3">
                    <form class="row" action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="name">NAMA</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                id="name" placeholder=" " value="{{ old('name') }}" required />
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="name">USERNAME</label>
                            <input type="text" name="username"
                                class="form-control @error('username') is-invalid @enderror" id="username" placeholder=" "
                                value="{{ old('username') }}" required />
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="university">UNIVERSITAS</label>
                            <input type="text" name="university"
                                class="form-control @error('university') is-invalid @enderror" id="university"
                                placeholder=" " value="{{ old('university') }}" required />
                            @error('university')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="major">JURUSAN</label>
                            <input type="text" name="major" class="form-control @error('major') is-invalid @enderror"
                                id="major" placeholder=" " value="{{ old('major') }}" required />
                            @error('major')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="email">EMAIL</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" placeholder=" " value="{{ old('email') }}" required />
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="phone_number">NOMOR HP.</label>
                            <input type="text" name="phone_number"
                                class="form-control @error('phone_number') is-invalid @enderror" id="phone_number"
                                placeholder=" " value="{{ old('phone_number') }}" required />
                            @error('phone_number')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="user_level">USER LEVEL</label>
                            <select class="form-select border-orange" name="user_level" id="user_level"
                                aria-label="Default select example">
                                <option value="user" selected>User</option>
                                <option value="moderator">Moderator</option>
                                <option value="tutor">Tutor</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="password">PASSWORD</label>
                            <small style="text-body-tertiary">min: 8 character</small>
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" id="password" placeholder=" "
                                required />
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

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

                        <div class="form-button col-6 mb-2 d-flex justify-content-end">
                            <button class="btn-orange-static px-4 d-inline text-end small" id="button" type="submit"
                                disabled>Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Last Page -->
@endsection
