@extends('dashboard.layouts.main')

@section('container')
    {{-- {{ dd($collections) }} --}}
    <!-- Isi Page -->
    <section class="container-fluid mb-5" id="user-profile">
        <div class="row gap-2">
            @include('dashboard.layouts.sidebar')

            <div class="card col ml-3 p-4 side-program">
                <div class="d-flex justify-content-between">
                    <h3 class="d-inline text-purple fw-bold">Beri catatan pada Ekadian Haris</h3>
                </div>
                <div class="p-2 pb-0 mt-2">
                    <table class="table table-borderless w-50">
                        <tbody>
                            <tr>
                                <td>PEMBELIAN</td>
                                <td class="fw-bold small">Selasa, 23 Februari 2023<br>12:50</td>
                            </tr>
                            <tr>
                                <td>TUTOR</td>
                                <td class="fw-bold small">Kak Yordhan</td>
                            </tr>
                            <tr>
                                <td>JADWAL</td>
                                <td class="fw-bold small">Selasa, 30 Februari 2023<br>18:15</td>
                            </tr>
                            <tr>
                                <td>PELAKSANAAN</td>
                                <td class="fw-bold small">Online</td>
                            </tr>
                            <tr>
                                <td>TEMPAT</td>
                                <td class="fw-bold small"><a href="#">linkroommeetzoom</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr class="m-0 w-100">
                <form action="" class="form">
                    <div class="form-group p-3 pb-0 mt-2">
                        <label class="form-label h4 fw-bold mb-4" for="catatan">Catatan dari Tutor</label>
                        <textarea class="form-control" name="catatan" id="catatan" rows="5" placeholder="Comments"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-6 form-group p-3 pb-0 mt-2">
                            <label class="form-label h4 fw-bold mb-4" for="dokumen">Lampiran Dokumen</label>
                            <input class="form-control" type="file" name="dokumen" id="dokumen" placeholder=" ">
                        </div>
                        <div class="form-button col-6 mb-3 d-flex justify-content-end pt-5">
                            <button class="btn-orange-static mt-4 px-4 d-inline text-end" id="button" type="submit">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Last Page -->
@endsection
