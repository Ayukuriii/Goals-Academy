<?php

namespace App\Http\Controllers;

use App\Models\OngoingProgram;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //mendapatkan data dengan cara find auth
        // $x       = OngoingProgram::latest()->where('user_id', $authuser->id)->find(auth()->user()->id);

        $authuser = auth()->user();
        $ongoing = OngoingProgram::latest()->where('user_id', $authuser->id)->get();
        $datecarbon = [];

        foreach ($ongoing as $program) {
            $datecarbon[] = Carbon::parse($program->date)->isoFormat('dddd, D MMMM Y');
        }

        return view('dashboard.user.index', [
            'posts' => $authuser,
            'title' => 'Profile',
            'datecarbon' => $datecarbon,
            'collections'  => $ongoing
        ]);
    }

    public function detail($id)
    {
        $authuser = auth()->user();
        $userid = OngoingProgram::where('user_id', $authuser->id)->find($id);
        $datepurchased = Carbon::parse($userid->created_at)->isoFormat('dddd, D MMMM Y | HH:mm');
        $datecarbon = Carbon::parse($userid->date)->isoFormat('dddd, D MMMM Y');

        return view('dashboard.user.details', [
            'posts' => auth()->user(),
            'title' => 'Details',
            'datecarbon' => $datecarbon,
            'datepurchased' => $datepurchased,
            'data' => OngoingProgram::find($id)
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
        return view('dashboard.user.edit', [
            'title' => 'Edit Profile',
            'posts' => auth()->user()
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
