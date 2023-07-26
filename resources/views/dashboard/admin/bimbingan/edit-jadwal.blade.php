@extends('dashboard.layouts.main')

@section('container')
    <!-- Isi Page -->
    <section class="container-fluid mb-5" id="user-profile">
        <div class="row mx-0 gap-2">
            @include('dashboard.layouts.sidebar')

            <div class="card col ml-3 p-4 side-program">
                <div class="d-flex justify-content-between w-75">
                    <h3 class="text-purple fw-bold">Edit Jadwal</h3>
                    <a class="d-inline btn-outline-orange py-2 px-4 small" onclick="history.back()"
                        style="cursor: pointer">Back</a>
                </div>
                <div class="form w-75 mt-3">
                    <form class="row" action="/admin/bimbingan/update/{{ $data->id }}" method="POST">
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
                            <input type="date" name="date" class="form-control" id="date" placeholder=""
                                value="{{ $data->date }}" required />
                            <div class="invalid-feedback">
                                Input tidak valid
                            </div>
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label" for="pelaksanaan">SESI</label>
                            <select class="form-select border-orange" name="program_session"
                                aria-label="Default select example">
                                <option value="09:00" {{ $data->program_session == '09:00' ? 'selected' : '' }}>09:00
                                </option>
                                <option value="11:00" {{ $data->program_session == '11:00' ? 'selected' : '' }}>11:00
                                </option>
                                <option value="13:00" {{ $data->program_session == '13:00' ? 'selected' : '' }}>13:00
                                </option>
                                <option value="15:00" {{ $data->program_session == '15:00' ? 'selected' : '' }}>15:00
                                </option>
                                <option value="17:00" {{ $data->program_session == '17:00' ? 'selected' : '' }}>17:00
                                </option>
                            </select>
                            <div class="invalid-feedback">
                                Input tidak valid
                            </div>
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label" for="tutor_id">TUTOR</label>
                            <select class="form-select border-orange" name="tutor_id" id="tutor_id">
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
                                    value="{{ $data->links }}" />
                                <div class="invalid-feedback">
                                    Input tidak valid
                                </div>
                            </div>
                        @else
                            <div class="form-group col-6 mb-2">
                                <label class="form-label" for="tempat">TEMPAT</label>
                                <select class="form-select border-orange" name="links" id="links">
                                    <option value="Nakoa">Nakoa</option>
                                    <option value="Nakoa">Kongca</option>
                                    <option value="Nakoa">Pavo</option>
                                </select>
                            </div>
                        @endif
                        <div class="form-button col-12 my-2 d-flex justify-content-end">
                            <br><br>
                            <button class="btn-orange-static my-1 px-4 d-inline text-end" id="button"
                                type="submit">Simpan</button>
                        </div>
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
