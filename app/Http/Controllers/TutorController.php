<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorController extends Controller
{
    public function index()
    {
        return view('dashboard.tutor.index', ['title' => 'Tutor']);
    }

    public function bimbingan()
    {
        return view('dashboard.tutor.bimbingan', ['title' => 'Tutor']);
    }

    public function riwayat()
    {
        return view('dashboard.tutor.riwayat', ['title' => 'Tutor']);
    }

    public function edit()
    {
        return view('dashboard.tutor.edit', ['title' => 'Tutor']);
    }

    public function detail()
    {
        return view('dashboard.tutor.detail', ['title' => 'Tutor']);
    }
}
