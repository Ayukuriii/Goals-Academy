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
        return view('dashboard.tutor.bimbingan.bimbingan', ['title' => 'Tutor']);
    }

    public function riwayat()
    {
        return view('dashboard.tutor.bimbingan.riwayat-bimbingan', ['title' => 'Tutor']);
    }

    public function detail()
    {
        return view('dashboard.tutor.bimbingan.detail-bimbingan', ['title' => 'Tutor']);
    }
}
