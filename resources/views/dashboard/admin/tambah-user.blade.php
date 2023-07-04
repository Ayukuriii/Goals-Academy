@extends('dashboard.layouts.main')

@section('container')
    {{-- {{ dd($collections) }} --}}
    <!-- Isi Page -->
    <section class="container-fluid mb-5" id="user-profile">
        <div class="row gap-2">
            @include('dashboard.admin.partials.sidebar')

            <div class="card col ml-3 p-4 side-program">
                <h3 class="text-purple fw-bold">Tambah User</h3>
                <div class="form w-75 mt-3">
                    <form class="row" action="#" method="POST">
                        @csrf
                        <div class="form-group col-6 mb-3">
                            <label class="form-label small" for="nama">NAMA</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder=" " required/>
                        </div>
                        <div class="form-group col-6 mb-3">
                            <label class="form-label small" for="universitas">UNIVERSITAS</label>
                            <input type="text" name="universitas" class="form-control" id="universitas" placeholder=" " required/>
                        </div>
                        <div class="form-group col-6 mb-3">
                            <label class="form-label small" for="email">EMAIL</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder=" " required/>
                        </div>
                        <div class="form-group col-6 mb-3">
                            <label class="form-label small" for="jurusan">JURUSAN</label>
                            <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder=" " required/>
                        </div>
                        <div class="form-group col-6 mb-3">
                            <label class="form-label small" for="nomor_hp">NOMOR HP.</label>
                            <input type="text" name="nomor_hp" class="form-control" id="nomor_hp" placeholder=" " required/>
                        </div>
                        <div class="form-group col-6 mb-3">
                            <label class="form-label small" for="password">PASSWORD</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder=" " required/>
                        </div>
                        <div class="form-group col-6 mb-3">
                            <label class="form-label small" for="user_level">USER LEVEL</label>
                            <select class="form-select border-orange" aria-label="Default select example">
                                <option value="user" selected>User</option>
                                <option value="moderator">Moderator</option>
                                <option value="tutor">Tutor</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="form-button col-6 mb-3 d-flex justify-content-end pt-4">
                            <button class="btn-orange-static mt-2 px-4 d-inline text-end small" id="button" type="submit" disabled>Simpan</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Last Page -->
   @endsection
