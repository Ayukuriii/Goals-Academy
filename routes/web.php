<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ModeratorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth', 'auth.session', 'verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/profile/{id}', [ProfileController::class, 'detail']);
});

Route::get('/login', [AuthController::class, 'get_login'])->middleware('guest');
Route::get('/register', [AuthController::class, 'get_register'])->middleware('guest');
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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', function () {
        if (auth()->user()->user_level === 'admin') {
            return app(AdminController::class)->index();
        } elseif (auth()->user()->user_level === 'moderator') {
            return app(ModeratorController::class)->index();
        } elseif (auth()->user()->user_level === 'tutor') {
            return app(TutorController::class)->index();
        } else {
            return app(UserController::class)->index();
        }
    });
});

// Route Admin
Route::middleware(['auth', 'check.level:admin'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin', 'index')->name('admin');
        Route::get('/admin/atur_jadwal', 'atur_jadwal')->name('admin.atur-jadwal');
        Route::get('/admin/riwayat_jadwal', 'riwayat_jadwal')->name('admin.riwayat-jadwal');
        Route::get('/admin/edit_jadwal', 'edit_jadwal')->name('admin.riwayat-jadwal');
        Route::get('/admin/bimbingan', 'bimbingan')->name('admin.bimbingan');
        Route::get('/admin/riwayat_bimbingan', 'riwayat_bimbingan')->name('admin.riwayat-bimbingan');
        Route::get('/admin/detail_bimbingan', 'detail_bimbingan')->name('admin.detail-bimbingan');
        Route::get('/admin/list_user', 'list_user')->name('admin.list_user');
        Route::get('/admin/tambah_user/create', 'create')->name('admin.create');
        Route::post('/admin/tambah_user/store', 'store')->name('admin.store');
    });
});

// Route Moderator
Route::middleware(['auth', 'check.level:moderator'])->group(function () {
    Route::controller(ModeratorController::class)->group(function () {
        Route::get('/moderator', 'index')->name('moderator');
        Route::get('/moderator/atur_jadwal', 'atur_jadwal')->name('moderator.atur-jadwal');
        Route::get('/moderator/riwayat_jadwal', 'riwayat_jadwal')->name('moderator.riwayat-jadwal');
        Route::get('/moderator/edit_jadwal', 'edit_jadwal')->name('moderator.edit-jadwal');
    });
});

// Route Tutor
Route::middleware(['auth', 'check.level:tutor'])->group(function () {
    Route::controller(TutorController::class)->group(function () {
        Route::get('/tutor', 'index')->name('tutor');
        Route::get('/tutor/bimbingan', 'bimbingan')->name('tutor');
        Route::get('/tutor/riwayat', 'riwayat')->name('tutor');
        Route::get('/tutor/edit', 'edit')->name('tutor');
        Route::get('/tutor/detail', 'detail')->name('tutor');
    });
});
