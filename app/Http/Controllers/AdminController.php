<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.admin.index', ['title' => 'Admin']);
    }

    public function atur_jadwal()
    {
        return view('dashboard.admin.atur-jadwal', ['title' => 'Admin']);
    }

    public function bimbingan()
    {
        return view('dashboard.admin.bimbingan', ['title' => 'Admin']);
    }

    public function list_user()
    {
        return view('dashboard.admin.list-user', ['title' => 'Admin']);
    }

    public function tambah_user()
    {
        return view('dashboard.admin.tambah-user', ['title' => 'Admin']);
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
