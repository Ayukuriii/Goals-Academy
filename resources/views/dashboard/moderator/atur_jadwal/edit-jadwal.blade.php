@extends('dashboard.layouts.main')

@section('container')
    {{-- {{ dd($collections) }} --}}
    <!-- Isi Page -->
    <section class="container-fluid mb-5" id="user-profile">
        <div class="row gap-2">
            @include('dashboard.layouts.sidebar')

            <div class="card col ml-3 p-4 side-program">
                <h3 class="text-purple fw-bold">Edit Jadwal</h3>
                <div class="form w-75 mt-3">
                    <form class="row" action="#" method="POST">
                        @csrf
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="nama">NAMA</label>
                            <input type="text" name="nama" class="form-control" id="nama"
                                placeholder="{{ $data->user->name }}" disabled />
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="universitas">UNIVERSITAS</label>
                            <input type="text" name="universitas" class="form-control" id="universitas"
                                placeholder="{{ $data->user->university }}" disabled />
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="email">EMAIL</label>
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="{{ $data->user->email }}" disabled />
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="jurusan">JURUSAN</label>
                            <input type="text" name="jurusan" class="form-control" id="jurusan"
                                placeholder="{{ $data->user->major }}" disabled />
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="nomor_hp">NOMOR HP.</label>
                            <input type="text" name="nomor_hp" class="form-control" id="nomor_hp"
                                placeholder="{{ $data->user->phone_number }}" disabled />
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="pembelian">PEMBELIAN</label>
                            <input type="text" name="pembelian" class="form-control" id="pembelian"
                                placeholder="{{ $data->created_at }}" disabled />
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="jadwal">JADWAL</label>
                            <input type="date" name="jadwal" class="form-control" id="jadwal" placeholder=""
                                value="{{ $data->date }}" required />
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="pelaksanaan">SESI</label>
                            <select class="form-select border-orange" aria-label="Default select example">
                                @foreach ($program_session as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $item->id == $data->program_session_id ? 'selected' : '' }}>
                                        {{ $item->sesi }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="pelaksanaan">PELAKSANAAN</label>
                            <select class="form-select border-orange" aria-label="Default select example">
                                <option value="online" {{ $data->location == 'online' ? 'selected' : '' }}>Online</option>
                                <option value="offline" {{ $data->location == 'offline' ? 'selected' : '' }}>Offline
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="tempat">TEMPAT</label>
                            <input type="text" name="tempat" class="form-control" id="tempat" placeholder=" "
                                value="{{ $data->links !== null ? $data->links : '' }}" required />
                        </div>
                        <div class="form-button col-12 my-2 d-flex justify-content-end">
                            <br><br>
                            <button class="btn-orange-static my-1 px-4 d-inline text-end small" id="button"
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
