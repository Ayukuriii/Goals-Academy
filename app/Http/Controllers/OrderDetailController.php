<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function pending(string $id)
    {
        $x =  OrderDetail::where('ongoing_program_id', $id)->first();
        $response = json_decode($x->jsonstring);
        // dd($response);
        return view('purchase.payment_pending', [
            'title' => 'Purchase',
            'response' => $response
        ]);
    }
}
