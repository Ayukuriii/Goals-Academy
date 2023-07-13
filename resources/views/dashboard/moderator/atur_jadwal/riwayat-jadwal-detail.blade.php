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
                    <a class="d-inline btn-outline-orange py-2 px-4 small" onclick="history.back()"
                        style="cursor: pointer">Back</a>
                </div>
                <div class="form w-75 mt-3">
                    <form class="row" action="/moderator/update/{{ $data->id }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="form-group col-6 mb-2">
                            <label class="form-label" for="nama">NAMA</label>
                            <input type="text" name="nama" class="form-control" id="nama"
                                placeholder="{{ $data->user->name }}" disabled />
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label" for="universitas">UNIVERSITAS</label>
                            <input type="text" name="universitas" class="form-control" id="universitas"
                                placeholder="{{ $data->user->university }}" disabled />
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label" for="email">EMAIL</label>
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="{{ $data->user->email }}" disabled />
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label" for="jurusan">JURUSAN</label>
                            <input type="text" name="jurusan" class="form-control" id="jurusan"
                                placeholder="{{ $data->user->major }}" disabled />
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label" for="nomor_hp">NOMOR HP.</label>
                            <input type="text" name="nomor_hp" class="form-control" id="nomor_hp"
                                placeholder="{{ $data->user->phone_number }}" disabled />
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label" for="kategori">KATEGORI</label>
                            <input type="text" name="kategori" class="form-control" id="kategori"
                                placeholder="{{ $data->program->title }}" disabled />
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label" for="date">JADWAL</label>
                            <input type="date" name="date" class="form-control" id="date"
                                value="{{ $data->date }}" disabled />
                            <div class="invalid-feedback">
                                Input tidak valid
                            </div>
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label" for="pelaksanaan">SESI</label>
                            <select class="form-select" name="program_session_id" aria-label="Default select example"
                                disabled>
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
                            <label class="form-label" for="tutor_id">TUTOR</label>
                            <select class="form-select" name="tutor_id" id="tutor_id" disabled>
                                @foreach ($tutor_data as $tutor)
                                    <option value="{{ $tutor->id }}"
                                        {{ $tutor->id == $data->tutor_id ? 'selected' : '' }}>
                                        {{ $tutor->user->name }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Input tidak valid
                            </div>
                        </div>
                        @if ($data->program->category == 'online')
                            <div class="form-group col-6 mb-2">
                                <label class="form-label" for="tempat">LINK</label>
                                <input type="text" name="links" class="form-control" id="links" placeholder=" "
                                    value="{{ $data->links }}" disabled>
                                <div class="invalid-feedback">
                                    Input tidak valid
                                </div>
                            </div>
                        @else
                            <div class="form-group col-6 mb-2">
                                <label class="form-label" for="tempat">TEMPAT</label>
                                <select class="form-select" name="links" id="links" disabled>
                                    <option value="Nakoa">Nakoa</option>
                                    <option value="Kongca">Kongca</option>
                                    <option value="Pavo">Pavo</option>
                                </select>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Last Page -->
@endsection

@section('script')
    <script>
        formInput.forEach((element) => {
            element.addEventListener("change", (e) => {
                validate(e.target);
            });
        });
    </script>
@endsection
