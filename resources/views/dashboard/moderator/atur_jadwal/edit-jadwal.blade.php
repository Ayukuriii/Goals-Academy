@extends('dashboard.layouts.main')

@section('container')
    {{-- {{ dd($collections) }} --}}
    <!-- Isi Page -->
    <section class="container-fluid mb-5" id="user-profile">
        <div class="row gap-2">
            @include('dashboard.layouts.sidebar')

            <div class="card col ml-3 p-4 side-program">
                <div class="d-flex justify-content-between w-75">
                    <h3 class="text-purple fw-bold">Edit Jadwal</h3>
                    <a class="d-inline btn-outline-orange py-2 px-4 small" onclick="history.back()" style="cursor: pointer">Back</a>
                </div>
                <div class="form w-75 mt-3">
                    <form class="row" action="/moderator/{{ $data->id }}/update" method="POST">
                        @method('put')
                        @csrf
                        <div class="form-group col-6 mb-2">
                            <label class="form-label" for="nama">NAMA</label>
                            <input type="text" name="nama" class="form-control is-invalid" id="nama"
                                placeholder="{{ $data->user->name }}" disabled />
                            <div class="invalid-feedback">
                                Input tidak valid
                            </div>
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label" for="universitas">UNIVERSITAS</label>
                            <input type="text" name="universitas" class="form-control is-invalid" id="universitas"
                                placeholder="{{ $data->user->university }}" disabled />
                            <div class="invalid-feedback">
                                Input tidak valid
                            </div>
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label" for="email">EMAIL</label>
                            <input type="email" name="email" class="form-control is-invalid" id="email"
                                placeholder="{{ $data->user->email }}" disabled />
                            <div class="invalid-feedback">
                                Input tidak valid
                            </div>
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label" for="jurusan">JURUSAN</label>
                            <input type="text" name="jurusan" class="form-control is-invalid" id="jurusan"
                                placeholder="{{ $data->user->major }}" disabled />
                            <div class="invalid-feedback">
                                Input tidak valid
                            </div>
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label" for="nomor_hp">NOMOR HP.</label>
                            <input type="text" name="nomor_hp" class="form-control is-invalid" id="nomor_hp"
                                placeholder="{{ $data->user->phone_number }}" disabled />
                            <div class="invalid-feedback">
                                Input tidak valid
                            </div>
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label" for="pembelian">PEMBELIAN</label>
                            <input type="text" name="pembelian" class="form-control is-invalid" id="pembelian"
                                placeholder="{{ $data->created_at }}" disabled />
                            <div class="invalid-feedback">
                                Input tidak valid
                            </div>
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label" for="jadwal">JADWAL</label>
                            <input type="date" name="jadwal" class="form-control is-invalid" id="jadwal" placeholder=""
                                value="{{ $data->date }}" required />
                            <div class="invalid-feedback">
                                Input tidak valid
                            </div>
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label" for="pelaksanaan">SESI</label>
                            <select class="form-select border-orange" name="program_session_id"
                                aria-label="Default select example">
                                @foreach ($program_session as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $item->id == $data->program_session_id ? 'selected' : '' }}>
                                        {{ $item->sesi }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Input tidak valid
                            </div>
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label" for="pelaksanaan">PELAKSANAAN</label>
                            <select class="form-select border-orange" name="location" aria-label="Default select example">
                                <option value="online" {{ $data->location == 'online' ? 'selected' : '' }}>Online</option>
                                <option value="offline" {{ $data->location == 'offline' ? 'selected' : '' }}>Offline
                                </option>
                            </select>
                            <div class="invalid-feedback">
                                Input tidak valid
                            </div>
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label" for="tempat">TEMPAT</label>
                            <input type="text" name="links" class="form-control is-invalid" id="links" placeholder=" "
                                value="{{ $data->links }}" />
                            <div class="invalid-feedback">
                                Input tidak valid
                            </div>
                        </div>
                        <div class="form-button col-12 my-2 d-flex justify-content-end">
                            <br><br>
                            <button class="btn-orange-static my-1 px-4 d-inline text-end" id="button"
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
