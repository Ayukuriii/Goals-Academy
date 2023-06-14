<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index', [
        'title' => 'Home'
    ]);
});

Route::get('/artikel', function () {
    return view('artikel',[
        'title' => 'Artikel'
    ]);
});

Route::get('/diskusi', function () {
    return view('diskusi', [
        'title' => 'Diskusi'
    ]);
});

Route::get('/karir', function () {
    return view('karir', [
        'title' => 'Karir'
    ]);
});

Route::get('/media_sosial', function () {
    return view('media_sosial', [
        'title' => 'Media Sosial'
    ]);
});

Route::get('/profil_company', function () {
    return view('profil_company', [
        'title' => 'Company Profil'
    ]);
});

Route::get('/profil_tutor', function () {
    return view('profil_tutor', [
        'title' => 'Profil Tutor'
    ]);
});

Route::get('/lupa-password', function () {
    return view('lupa-password', [
        'title' => 'Lupa Password'
    ]);
});

Route::get('/dibimbing-sekali', function () {
    return view('dibimbing-sekali', [
        'title' => 'Dibimbing Sekali'
    ]);
});



Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/profile/{id}', [ProfileController::class, 'detail']);

Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::post('/register', [RegisterController::class, 'store']);