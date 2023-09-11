<?php

use App\Http\Controllers\API\HandleMidtransController;
use App\Models\OrderDetail;
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

Route::post('check_status', function (Request $request) {
    $data = OrderDetail::where('order_id', $request->order_id)->first();

    return response()->json($data->status);
});
