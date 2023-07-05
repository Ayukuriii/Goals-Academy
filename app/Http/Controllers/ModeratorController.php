<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModeratorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.moderator.index', ['title' => 'Moderator']);
    }
    public function atur_jadwal()
    {
        return view('dashboard.moderator.atur_jadwal.atur-jadwal', ['title' => 'Moderator']);
    }
    public function riwayat_jadwal()
    {
        return view('dashboard.moderator.atur_jadwal.riwayat-jadwal', ['title' => 'Moderator']);
    }
    public function edit_jadwal()
    {
        return view('dashboard.moderator.atur_jadwal.edit-jadwal', ['title' => 'Moderator']);
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
        //
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
