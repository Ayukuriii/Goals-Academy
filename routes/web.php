<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VerificationController;

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
})->name('index');

Route::get('/artikel', function () {
    return view('coming_soon.artikel', [
        'title' => 'Artikel'
    ]);
});

Route::get('/diskusi', function () {
    return view('coming_soon.diskusi', [
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
    return view('coming_soon.profil_tutor', [
        'title' => 'Profil Tutor'
    ]);
});

Route::get('/dibimbing-sekali', function () {
    return view('dibimbing-sekali', [
        'title' => 'Dibimbing Sekali'
    ]);
});

Route::get('/profile_tutor', function () {
    return view('coming_soon.profil_tutor', [
        'title' => 'Profil Tutor'
    ]);
});

Route::get('/auth/lupa-password', function () {
    return view('auth.lupa_password', [
        'title' => 'Lupa Password'
    ]);
});

Route::get('/admin', function () {
    return view('dashboard.admin.index', ['title' => 'Admin']);
});

Route::get('/admin/atur_jadwal', function () {
    return view('dashboard.admin.atur-jadwal', ['title' => 'Admin']);
});

Route::get('/admin/bimbingan', function () {
    return view('dashboard.admin.bimbingan', ['title' => 'Admin']);
});

Route::get('/admin/list_user', function () {
    return view('dashboard.admin.list-user', ['title' => 'Admin']);
});

Route::get('/admin/tambah_user', function () {
    return view('dashboard.admin.tambah-user', ['title' => 'Admin']);
});

Route::middleware('auth', 'auth.session', 'verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/profile/{id}', [ProfileController::class, 'detail']);
});

Route::get('/login', [AuthController::class, 'get_login']);
Route::get('/register', [AuthController::class, 'get_register']);
Route::post('/register', [AuthController::class, 'post_register'])->name('register');
Route::post('/login', [AuthController::class, 'post_login'])->name('login');
Route::post('/logout', [AuthController::class, 'post_logout'])->name('logout');

Route::get('/email/verify/email-verification', [VerificationController::class, 'notice'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->middleware('auth', 'signed')->name('verification.verify');
Route::get('/email/verify/resend-verification', [VerificationController::class, 'resend'])->middleware('auth', 'throttle:6,1')->name('verification.resend');

Route::get('/test', function () {
    return view('test.test', [
        'title' => 'Test'
    ]);
});
Route::post('/send-email', [EmailController::class, 'sendEmail']);
