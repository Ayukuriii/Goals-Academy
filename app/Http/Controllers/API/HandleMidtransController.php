<?php

namespace App\Http\Controllers\API;

use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Models\OngoingProgram;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Notification;
use App\Notifications\OrderCallbackNotification;
use Illuminate\Support\Facades\Log;

class HandleMidtransController extends Controller
{
    public function handle_payment(Request $request)
    {
        $data = $request->all();
        Log::info('incoming midtrans', ['payload' => $data]);

        $orderId = $data['order_id'];
        $statusCode = $data['status_code'];
        $grossAmount = $data['gross_amount'];
        $midSignature = $data['signature_key'];

        $signatureKey = hash('sha512', $orderId . $statusCode . $grossAmount . config('midtrans.server_key'));

        if ($signatureKey != $midSignature) {
            return response()->json([
                'message' => 'Invalid signature!'
            ], 400);
        }

        $order = OrderDetail::where('order_id', $orderId)->first();
        $order->status = $data['transaction_status'];
        $order->jsonstring = json_encode($data);
        $order->save();

        $user = $order->ongoing_program->user;
        Notification::send($user, new OrderCallbackNotification($order->id));

        return response()->json(['message' => 'Data updated successfully']);
    }
}
