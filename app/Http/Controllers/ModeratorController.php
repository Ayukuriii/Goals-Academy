<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use Illuminate\Http\Request;
use App\Models\OngoingProgram;
use App\Models\ProgramSession;

class ModeratorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.moderator.index', [
            'title' => 'Moderator',
            'datas' => OngoingProgram::all(),
            'emptylink' => OngoingProgram::where('links', '=', null)->count()
        ]);
    }
    public function atur_jadwal()
    {
        return view('dashboard.moderator.atur_jadwal.atur-jadwal', [
            'title' => 'Moderator',
            'datas' => OngoingProgram::where('is_tutor', 0)->orWhere('is_moderator', 0)->with('tutor.user')->get()
        ]);
    }
    public function selesai(string $id)
    {
        $data = OngoingProgram::findOrFail($id);
        $data['is_moderator'] = 1;
        $data->save();

        return redirect('/moderator/atur_jadwal');
    }
    public function riwayat_jadwal()
    {
        return view('dashboard.moderator.atur_jadwal.riwayat-jadwal', [
            'title' => 'Moderator',
            'datas' => OngoingProgram::where('is_tutor', 1)->Where('is_moderator', 1)->with('tutor.user')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.moderator.atur_jadwal.edit-jadwal', [
            'title' => 'Moderator',
            'program_session' => ProgramSession::all(),
            'tutor_data' => Tutor::all(),
            'data' => OngoingProgram::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = OngoingProgram::findOrFail($id);
        $data->fill($request->except([
            '_method',
            '_token',
        ]));
        // dd($data);
        if ($data->save()) {
            return redirect('/moderator/atur_jadwal')->with('update-success', 'Data ' . $data->user->name . ' berhasil di ubah');
        } else {
            return back()->with('update-failed', 'Invalid Data');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
