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
            'datas' => OngoingProgram::all()
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
