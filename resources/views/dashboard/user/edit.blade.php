@extends('dashboard.layouts.main')

@section('container')
    {{-- {{ dd($collections) }} --}}
    <!-- Isi Page -->
    <section class="container mb-5" id="user-profile">
        <div class="row gap-4">

            @include('dashboard.user.partials.sidebar')

            <div class="card col ml-3 p-4 side-program">
                <div>
                    <div class="d-flex justify-content-between">
                        <h3 class="d-inline text-purple fw-bold">Edit Profil</h3>
                        <a class="d-inline btn-outline-orange py-2 px-4 small" onclick="history.back()" style="cursor: pointer">Back</a>
                    </div>
                    <form action="#" method="POST" class="from row mt-3 px-2">
                        @csrf
                        <div class="d-flex align-items-center form-group mb-2">
                            <img src="{{ asset('image/assets/images/login/profile-grey.png') }}" width="80px" />
                            <div class="ms-3">
                                <label for="photo" class="btn-outline-orange px-3 py-2 fw-bold" style="cursor: pointer;">Unggah Foto</label><br>
                                <small style="font-size: 0.7rem">*Maksimum 2MB</small>
                            </div>
                            <input type="file" class="form-control is-invalid d-none" name="photo" id="photo">
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="name">NAMA</label>
                            <input type="text" name="name" class="form-control is-invalid" id="name" placeholder=" "
                                required />
                            <div class="invalid-feedback">
                                Input tidak valid
                            </div>
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="name">USERNAME</label>
                            <input type="text" name="username" class="form-control is-invalid" id="username" placeholder=" "
                                required />
                            <div class="invalid-feedback">
                                Input tidak valid
                            </div>
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="university">UNIVERSITAS</label>
                            <input type="text" name="university" class="form-control is-invalid" id="university" placeholder=" "
                                required />
                            <div class="invalid-feedback">
                                Input tidak valid
                            </div>
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="major">JURUSAN</label>
                            <input type="text" name="major" class="form-control is-invalid" id="major" placeholder=" "
                                required />
                            <div class="invalid-feedback">
                                Input tidak valid
                            </div>
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="phone_number">NOMOR HP.</label>
                            <input type="text" name="phone_number" class="form-control is-invalid" id="phone_number" placeholder=" "
                                required />
                            <div class="invalid-feedback">
                                Input tidak valid
                            </div>
                        </div>
                        <div class="form-button col-6 mb-3 d-flex justify-content-end pt-5">
                            <button class="btn-orange-static px-4 d-inline text-end" id="button"
                                type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
                <hr class="w-100">
                <div>
                    <h3 class="d-inline text-purple fw-bold">Ubah Email</h3>
                    <form action="#" method="POST" class="from row mt-3 px-2">
                        @csrf
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="email">EMAIL</label>
                            <input type="email" name="email" class="form-control is-invalid" id="email" placeholder=" "
                                required />
                            <div class="invalid-feedback">
                                Input tidak valid
                            </div>
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="password">PASSWORD</label>
                            <input type="password" name="password" class="form-control is-invalid" id="password" placeholder=" "
                                required />
                            <div class="invalid-feedback">
                                Input tidak valid
                            </div>
                        </div>
                        <div class="form-button col-12 mb-3 d-flex justify-content-end">
                            <button class="btn-orange-static px-4 d-inline text-end" id="button"
                                type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
                <hr class="w-100">
                <div>
                    <h3 class="d-inline text-purple fw-bold">Ubah Password</h3>
                    <form action="#" method="POST" class="from row mt-3 px-2">
                        @csrf
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="new_password">PASSWORD BARU</label>
                            <input type="password" name="new_password" class="form-control is-invalid" id="new_password" placeholder=" "
                                required />
                            <div class="invalid-feedback">
                                Input tidak valid
                            </div>
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="old_password">PASSWORD LAMA</label>
                            <input type="password" name="old_password" class="form-control is-invalid" id="old_password" placeholder=" "
                                required />
                            <div class="invalid-feedback">
                                Input tidak valid
                            </div>
                        </div>
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="confirmation_password">ULANGI PASSWORD BARU</label>
                            <input type="password" name="confirmation_password" class="form-control is-invalid" id="confirmation_password" placeholder=" "
                                required />
                            <div class="invalid-feedback">
                                Input tidak valid
                            </div>
                        </div>
                        <div class="form-button col-6 mb-3 d-flex justify-content-end pt-3">
                            <button class="btn-orange-static px-4 d-inline text-end" id="button"
                                type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Last Page -->
@endsection
