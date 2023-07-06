<?php

namespace App\Http\Controllers;

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
            'datas' => OngoingProgram::where('program_status', 0)->get()
        ]);
    }
    public function selesai(string $id)
    {
        $data = OngoingProgram::findOrFail($id);
        $data['program_status'] = 1;
        $data->save();

        return redirect('/moderator/atur_jadwal');
    }
    public function riwayat_jadwal()
    {
        return view('dashboard.moderator.atur_jadwal.riwayat-jadwal', [
            'title' => 'Moderator',
            'datas' => OngoingProgram::where('program_status', 1)->get()
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
            'data' => OngoingProgram::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = OngoingProgram::findOrFail($id);
        $data->fill($request->only([
            'jadwal',
            'program_session_id',
            'location',
            'links'
        ]));
        // dd($data);
        $data->save();
        return redirect('/moderator/atur_jadwal');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
