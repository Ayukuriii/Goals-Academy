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
                    <table class="table table-borderless w-50">
                        <tbody>
                            <tr>
                                <td>PEMBELIAN</td>
                                <td class="fw-bold small">
                                    {{ \Carbon\Carbon::parse($data->created_at)->isoFormat('dddd, D MMMM Y') }}<br>12:50
                                </td>
                            </tr>
                            <tr>
                                <td>TUTOR</td>
                                <td class="fw-bold small">Kak {{ $data->tutor->user->name }}</td>
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

                                <td class="fw-bold small">
                                    <a href="/download/{{ $data->file }}">{{ $data->file }}</a>
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
                <hr class="m-0 w-100">
                <div class="form-group p-3 pb-0 mt-2">
                    <label class="form-label h4 fw-bold mb-4" for="catatan">Catatan dari Tutor</label>
                    <textarea class="form-control" name="body" id="body" rows="5" placeholder="Comments" disabled>{{ optional($data->tutor_notes->first())->body }}</textarea>
                </div>
                <div class="row">
                    <div class="col-6 form-group p-3 pb-0 mt-2">
                        <label class="form-label h4 fw-bold mb-4" for="dokumen">Lampiran Dokumen</label>
                        <input class="form-control" type="file" name="dokumen" id="dokumen" placeholder=" " disabled>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Last Page -->
@endsection
