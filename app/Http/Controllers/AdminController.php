<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\OngoingProgram;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $datas = OngoingProgram::where('links', '=', null)->count();
        // dd($datas);
        return view('dashboard.admin.index', [
            'title' => 'Admin',
            'datas' => OngoingProgram::all(),
            'emptylink' => OngoingProgram::where('links', '=', null)->count()
        ]);
    }
    public function atur_jadwal()
    {
        return view('dashboard.admin.atur-jadwal', [
            'title' => 'Admin',
            'datas' => OngoingProgram::all()
        ]);
    }
    public function bimbingan()
    {
        return view('dashboard.admin.bimbingan', [
            'title' => 'Admin',
            'datas' => OngoingProgram::all()
        ]);
    }
    public function list_user()
    {
        return view('dashboard.admin.list_user', [
            'title' => 'Admin',
            'datas' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.tambah_user', [
            'title' => 'Admin'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required',
            'university' => 'required',
            'major' => 'required',
            'password' => 'required',
            'user_level' => 'required'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        // dd($validateData);
        User::create($validateData);
        return redirect()->route('admin.list_user');
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
