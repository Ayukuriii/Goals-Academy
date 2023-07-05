<?php

namespace App\Http\Controllers;

use App\Models\OngoingProgram;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    public function index()
    {
        return view('dashboard.tutor.index', [
            'title' => 'Tutor',
            'datas' => OngoingProgram::all(),
            'emptylink' => OngoingProgram::where('links', '=', null)->count()
        ]);
    }

    public function bimbingan()
    {
        return view('dashboard.tutor.bimbingan.bimbingan', [
            'title' => 'Tutor',
            'datas' => OngoingProgram::all(),
        ]);
    }

    public function riwayat()
    {
        return view('dashboard.tutor.bimbingan.riwayat', [
            'title' => 'Tutor',
        ]);
    }

    public function detail()
    {
        return view('dashboard.tutor.bimbingan.detail', ['title' => 'Tutor']);
    }
}
