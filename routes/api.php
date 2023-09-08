<?php

use App\Http\Controllers\API\HandleMidtransController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('handle_payment', [HandleMidtransController::class, 'handle_payment']);

Route::get('check_status', function () {
    $data = [
        "transaction_time" => "2021-06-15 18:45:13",
        "transaction_status" => "success",
        "transaction_id" => "d231ec6e-210a-461d-b8b4-b695d3f9ce28",
        "status_message" => "midtrans payment notification",
        "status_code" => "201",
        "signature_key" => "53e79d275fcb8b2595b868e54f3968e93f5dc9c04f55a24dbec4348ee1e06302faf7b97a7a5adbaaffd62d026afc45fc410027f756ce84fc61e7d1a4b90364fe",
        "settlement_time" => "2021-06-15 18:45:28",
        "payment_type" => "gopay",
        "order_id" => "GA20230908175046",
        "merchant_id" => "G141532850",
        "gross_amount" => "13.00",
        "fraud_status" => "accept",
        "currency" => "IDR"
    ];

    return response()->json($data);
});
