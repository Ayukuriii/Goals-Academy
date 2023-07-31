<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use App\Models\TutorNotes;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Models\OngoingProgram;
use App\Models\ProgramService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TutorController extends Controller
{
    public function index()
    {
        $datas = OngoingProgram::whereHas('tutor.user', function ($query) {
            $query->where('name', auth()->user()->name);
        });

        return view('dashboard.tutor.index', [
            'title' => 'Tutor',
            'datas' => $datas->count(),
            'data' => $datas->where('is_tutor', '=', 0)->count()
        ]);
    }

    public function bimbingan()
    {
        $datas = OngoingProgram::whereHas('tutor.user', function ($query) {
            $query->where('name', auth()->user()->name);
        });

        return view('dashboard.tutor.bimbingan.bimbingan', [
            'title' => 'Tutor',
            'datas' => $datas->where('is_tutor', '=', 0)
                ->with('tutor.user')
                ->with('orderDetail')
                ->get(),
        ]);
    }

    public function riwayat()
    {
        $datas = OngoingProgram::whereHas('tutor.user', function ($query) {
            $query->where('name', auth()->user()->name);
        });

        return view('dashboard.tutor.bimbingan.riwayat-bimbingan', [
            'title' => 'Tutor',
            'datas' => $datas->where('is_tutor', '=', 1)
                ->with('tutor.user')
                ->with('orderDetail')
                ->get()
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
        $x =  OrderDetail::where('ongoing_program_id', $id)->first();
        $response = json_decode($x->jsonstring);
        $rules = [
            'body' => 'nullable',
            'file' => 'file| mimes:pdf,doc,docx |nullable'
        ];
        $validateData = $request->validate($rules);

        // cek apakah ada request file, jika ada masukkan path ke variabel
        if ($request->file('file')) {
            if ($request->oldFile) {
                Storage::delete('tutor_files/' . $request->oldFile);
            }
            $originalName = $request->file('file')->getClientOriginalName();
            $filePath = $request->file('file')->store('tutor_files');
            $filePath = str_replace('tutor_files/', '', $filePath);
            $validateData['alias'] = $originalName;
            $validateData['file'] = $filePath;
        }

        $tutorNotes = TutorNotes::where('ongoing_program_id', $id)->first();

        if (!$tutorNotes) {
            $validateData['ongoing_program_id'] = $id;
            TutorNotes::create($validateData);
        } else {
            $tutorNotes->update($validateData);
        }
        return redirect('/tutor/bimbingan')->with('edit-success', 'Data ' . $response->order_id . ' berhasil teredit!');
    }
    public function selesai(string $id)
    {
        $x =  OrderDetail::where('ongoing_program_id', $id)->first();
        $response = json_decode($x->jsonstring);

        $data = OngoingProgram::findOrFail($id);
        $data['is_tutor'] = 1;
        $data->save();
        return back()->with('selesai-success', 'Data ' . $response->order_id . ' berhasil disetujui');
    }
}
