<?php

namespace App\Http\Controllers;

use App\Models\ProgramService;
use App\Models\ProgramSession;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index_midtrans()
    {
        return view('test.midtrans.midtrans', [
            'datas' => ProgramService::all(),
        ]);
    }
    public function order(string $id)
    {
        return view('test.midtrans.order-details', [
            'data' => ProgramService::find($id),
            'sesi' => ProgramSession::all(),
        ]);
    }
    public function payment(Request $request, string $id)
    {
        $session = auth()->user();
        $service = ProgramService::find($id);
        dd($session);
        return view('test.midtrans.order-payment', [
            'data' => ProgramService::find($id),
            'sesi' => ProgramService::find($request->id),
        ]);
    }
}
