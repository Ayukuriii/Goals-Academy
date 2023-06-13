<?php

namespace App\Http\Controllers;

use App\Models\OngoingProgram;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authuser = auth()->user();
        $ongoing = OngoingProgram::latest()->where('user_id', $authuser->id)->get();

        // foreach ($ongoing as $program) {
        //     dd($program->payment_status->status);
        // }

        return view('dashboard.user.index', [
            'posts' => $authuser,      //mengambil data dari session dicocokkan dengan tabel user
            'title' => 'Profile',
            'collections'  => $ongoing
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
