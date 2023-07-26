@extends('dashboard.layouts.main')

@section('container')
    {{-- {{ dd($collections) }} --}}
    <!-- Isi Page -->
    <section class="container-fluid mb-5" id="user-profile">
        <div class="row mx-0 gap-2">
            @include('dashboard.layouts.sidebar')

            <div class="card col ml-3 p-4 side-program">
                <div class="d-flex justify-content-between">
                    <h3 class="d-inline text-purple fw-bold">Beri catatan pada {{ $data->user->name }}</h3>
                    <a class="d-inline btn-outline-orange py-2 px-4 small" onclick="history.back()"
                        style="cursor: pointer">Back</a>
                </div>
                <div class="p-2 pb-0 mt-2">
                    <table class="table table-borderless w-70">
                        <tbody>
                            <tr>
                                <td>PEMBELIAN</td>
                                <td class="fw-bold small">
                                    {{ \Carbon\Carbon::parse($data->created_at)->isoFormat('dddd, D MMMM Y') }}<br>12:50
                                </td>
                            </tr>
                            <tr>
                                <td>TUTOR</td>
                                @if (optional($data->tutor)->user)
                                    <td class="fw-bold small">Kak {{ $data->tutor->user->name }}</td>
                                @else
                                    <td class="fw-bold small">Kosong</td>
                                @endif
                            </tr>
                            <tr>
                                <td>JADWAL</td>
                                <td class="fw-bold small">
                                    {{ \Carbon\Carbon::parse($data->date)->isoFormat('dddd, D MMMM Y') }}<br>{{ $data->program_session }}
                                </td>
                            </tr>
                            <tr>
                                <td>PELAKSANAAN</td>
                                <td class="fw-bold small">{{ $data->program->category }}</td>
                            </tr>
                            <tr>
                                @if ($data->program->category == 'online')
                                    <td>LINK</td>
                                    <td class="fw-bold small">
                                        <a
                                            href="{{ strpos($data->links, 'http') === 0 ? $data->links : 'https://' . $data->links }}">
                                            {{ $data->links }}
                                        </a>
                                    </td>
                                @else
                                    <td>TEMPAT</td>
                                    <td class="fw-bold small">{{ $data->links }}</td>
                                @endif
                            </tr>
                            <tr>
                                <td>LAMPIRAN</td>

                                @if ($data->file)
                                    <td class="fw-bold small">
                                        <a href="/download/bimbingan/{{ $data->file }}">{{ $data->file }}</a>
                                    </td>
                                @else
                                    <td class="fw-bold small">-</td>
                                @endif
                            </tr>
                            <tr>
                                <td>LAMPIRAN TUTOR</td>
                                <td class="fw-bold small">
                                    @if (optional($data->tutor_notes->first())->file)
                                        <a
                                            href="/download/tutor/{{ optional($data->tutor_notes->first())->file }}">{{ optional($data->tutor_notes->first())->alias }}</a>
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr class="m-0 w-100">
                <div class="form-group p-3 pb-0 my-2">
                    <label class="form-label h4 fw-bold mb-4" for="catatan">Catatan dari
                        {{ $data->user->name }}</label>
                    <textarea class="form-control" name="body" id="body" rows="5" placeholder="Comments" disabled>{{ $data->catatan }}</textarea>
                </div>
                <form action="/admin/bimbingan/edit/{{ $data->id }}" method="POST" class="form"enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group p-3 pb-0 mt-2">
                        <label class="form-label h4 fw-bold mb-4" for="catatan">Catatan dari Tutor</label>
                        <textarea class="form-control" name="body" id="body" rows="5" placeholder="Comments">{{ optional($data->tutor_notes->first())->body }}</textarea>
                    </div>
                    <div class="d-flex">
                        <div class="col-6 form-group p-3 pb-0 mt-2">
                            <label class="form-label h4 fw-bold mb-4" for="file">Lampiran Dokumen</label>
                            <input class="form-control" type="file" name="file" id="file" placeholder=" ">

                            {{-- hidden input --}}
                            <input type="hidden" name="oldFile" value="{{ optional($data->tutor_notes->first())->file }}">
                        </div>
                        <div class="form-button col-6 mb-3 d-flex justify-content-end pt-5 pe-3 ">
                            <button class="btn-orange-static mt-4 px-4 d-inline text-end" id="button"
                                type="submit">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Last Page -->
@endsection
