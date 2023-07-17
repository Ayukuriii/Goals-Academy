<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use App\Models\TutorNotes;
use Illuminate\Http\Request;
use App\Models\OngoingProgram;
use App\Models\ProgramService;
use App\Models\ProgramSession;

class TutorController extends Controller
{
    public function index()
    {
        return view('dashboard.tutor.index', [
            'title' => 'Tutor',
            'datas' => OngoingProgram::all(),
            'data' => OngoingProgram::where('is_tutor', '=', 0)->orWhere('is_moderator', '=', 0)->count()
        ]);
    }

    public function bimbingan()
    {
        return view('dashboard.tutor.bimbingan.bimbingan', [
            'title' => 'Tutor',
            'datas' => OngoingProgram::where('is_tutor', 0)->orWhere('is_moderator', 0)->with('tutor.user')->get()
        ]);
    }

    public function riwayat()
    {
        return view('dashboard.tutor.bimbingan.riwayat-bimbingan', [
            'title' => 'Tutor',
            'datas' => OngoingProgram::where('is_tutor', 1)->Where('is_moderator', 1)->with('tutor.user')->get()
        ]);
    }
    public function riwayat_bimbingan_detail(string $id)
    {
        return view('dashboard.tutor.bimbingan.riwayat-bimbingan-detail', [
            'title' => 'Admin',
            'tutor_data' => Tutor::all(),
            'program_services' => ProgramService::all(),
            'data' => OngoingProgram::find($id)
        ]);
    }

    public function detail($id)
    {
        return view('dashboard.tutor.bimbingan.detail-bimbingan', [
            'title' => 'Tutor',
            'data' => OngoingProgram::find($id)
        ]);
    }
    public function edit(Request $request, string $id)
    {
        $data = TutorNotes::find($id);
        $data->fill($request->only([
            'body',
            'file'
        ]));
        $data->save();
        return redirect('/tutor/bimbingan')->with('edit-success', 'Data berhasil teredit!');
    }
    public function selesai(string $id)
    {
        $data = OngoingProgram::findOrFail($id);
        $data['is_tutor'] = 1;
        $data->save();
        return back()->with('selesai-success', 'Data berhasil disetujui');
    }
}
