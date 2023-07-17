<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\ProgramService;
use App\Models\ProgramSession;

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

    public function test()
    {
        // $d = Carbon::today();
        // echo $d->format('d-m-Y');

        // // Set the desired times
        // $s1 = Carbon::instance($d)->setTime(9, 0, 0); // 09:00
        // $s2 = Carbon::instance($d)->setTime(11, 0, 0); // 11:00
        // $s3 = Carbon::instance($d)->setTime(13, 0, 0); // 13:00
        // $s4 = Carbon::instance($d)->setTime(15, 0, 0); // 15:00
        // $s5 = Carbon::instance($d)->setTime(17, 0, 0); // 17:00

        // // Daftar jam yang tersedia
        // $jamTersedia = [$s1, $s2, $s3, $s4, $s5];
        // $sesi = [];

        // foreach ($jamTersedia as $jam) {
        //     if ($jam > $d) {
        //         $selisih = $jam->diffInHours($d);
        //         if ($selisih >= 3) {
        //             $sesi[] = $jam->format('H:i');
        //         }
        //     }
        // }
        // foreach ($sesi as $s) {
        //     echo $s . "\n";
        // }

        $date = Carbon::now()->format('d-m-Y H:i');
        echo $date . "<br><br>";
        $d = Carbon::now();

        // Set the desired times
        $s1 = Carbon::parse($date)->setTime(9, 0, 0); // 09:00
        $s2 = Carbon::parse($date)->setTime(11, 0, 0); // 11:00
        $s3 = Carbon::parse($date)->setTime(13, 0, 0); // 13:00
        $s4 = Carbon::parse($date)->setTime(15, 0, 0); // 15:00
        $s5 = Carbon::parse($date)->setTime(17, 0, 0); // 17:00
        $jamTersedia = [$s1, $s2, $s3, $s4, $s5];

        $sesi = [];
        foreach ($jamTersedia as $jam) {
            if ($jam > $d) {
                $selisih = $jam->diffInHours($d);
                if ($selisih >= 3) {
                    $sesi[] = $jam->toDateTimeString();
                }
            }
        }
        
        if (count($sesi) > 0) {
            foreach ($sesi as $jam) {
                echo Carbon::parse($jam)->format('H:i') . "<br>";
                echo "something";
            }
        } else {
            echo "kosong";
        }
    }
}
