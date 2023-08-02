<?php

namespace App\Http\Controllers;

use App\Models\OngoingProgram;
use App\Models\OrderDetail;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\ProgramService;
use App\Models\ProgramSession;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function notif()
    {
        $user = Auth::user();
        $notifications = $user->notifications;
        // dd($notifications);
        foreach ($notifications as $notif) {
            $order = OrderDetail::find($notif->data['order_detail_id']);
            $stringToJson = json_decode($order->jsonstring);
            // dd($order);
            // dd($stringToJson);
            echo $stringToJson->order_id;
            echo '<br>';
            echo $order->ongoing_program->program->title;
            echo '<br>';
            echo $stringToJson->transaction_status  ;
            echo '<br>';
            // echo $stringToJson->status_message;
        }
    }
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

    public function expiryTime($id)
    {
        $a = OngoingProgram::find($id);
        $x = OrderDetail::find($id);
        $response = json_decode($x->jsonstring);

        $timeNow = time();
        $exptime = strtotime($response->expiry_time);

        echo 'time now = ' . $timeNow;
        echo '<br>';
        echo 'exp time = ' . $exptime;

        if ($timeNow < $exptime) {
            $b = $exptime - $timeNow;
            echo $b;
        }
        echo 'A';

        // dd($response, $a->created_at);
    }
}
