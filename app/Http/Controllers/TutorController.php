<?php

namespace App\Http\Controllers;

use App\Models\TutorNotes;
use Illuminate\Http\Request;
use App\Models\OngoingProgram;

class TutorController extends Controller
{
    public function index()
    {
        return view('dashboard.tutor.index', [
            'title' => 'Tutor',
            'datas' => OngoingProgram::all(),
            'data' => OngoingProgram::where('program_status', '=', 0)->count()
        ]);
    }

    public function bimbingan()
    {
        return view('dashboard.tutor.bimbingan.bimbingan', [
            'title' => 'Tutor',
            'datas' => OngoingProgram::where('program_status', 0)->get()
        ]);
    }

    public function riwayat()
    {
        return view('dashboard.tutor.bimbingan.riwayat-bimbingan', [
            'title' => 'Tutor',
            'datas' => OngoingProgram::where('program_status', 1)->get()
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
        return redirect('/tutor/bimbingan');
    }
}
