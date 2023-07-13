<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\ModeratorController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\VerificationController;
use App\Http\Livewire\Purchase;

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

Route::get('/program', function () {
    return view('program', [
        'title' => 'Program'
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

Route::get('/login', [AuthController::class, 'get_login'])->middleware('guest');
Route::get('/register', [AuthController::class, 'get_register'])->middleware('guest');
Route::post('/register', [AuthController::class, 'post_register'])->name('register');
Route::post('/login', [AuthController::class, 'post_login'])->name('login');
Route::post('/logout', [AuthController::class, 'post_logout'])->name('logout');

Route::get('/email/verify/email-verification', [VerificationController::class, 'notice'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->middleware('auth', 'signed')->name('verification.verify');
Route::get('/email/verify/resend-verification', [VerificationController::class, 'resend'])->middleware('auth', 'throttle:6,1')->name('verification.resend');

Route::post('/send-email', [EmailController::class, 'sendEmail']);

//Route Download
Route::get('/download/{filename}', [DownloadController::class, 'download_bimbingan'])->middleware('auth')->name('file-download');

// Route Admin
Route::middleware(['auth', 'check.level:admin'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin', 'index')->name('admin');

        Route::get('/admin/bimbingan', 'bimbingan')->name('admin.bimbingan');
        Route::get('/admin/riwayat_bimbingan', 'riwayat_bimbingan')->name('admin.riwayat-bimbingan');
        Route::get('/admin/riwayat_bimbingan_detail/{id}', 'riwayat_bimbingan_detail')->name('admin.riwayat-bimbingan');
        Route::get('/admin/bimbingan/show/{id}', 'show_bimbingan')->name('admin.show-bimbingan');
        Route::put('/admin/bimbingan/update/{id}', 'update_bimbingan')->name('admin.update-bimbingan');
        Route::get('/admin/bimbingan/detail/{id}', 'detail_bimbingan')->name('admin.detail-bimbingan');
        Route::put('/admin/bimbingan/edit/{id}', 'edit_bimbingan')->name('admin.edit-bimbingan');
        Route::put('/admin/bimbingan/selesai/{id}', 'selesai_bimbingan')->name('admin.selesai-bimbingan');
        Route::put('/admin/bimbingan/restore/{id}', 'restore_bimbingan')->name('admin.restore-bimbingan');

        Route::get('/admin/list_user', 'list_user')->name('admin.list_user');
        Route::get('/admin/tambah_user/create', 'create')->name('admin.create');
        Route::post('/admin/tambah_user/store', 'store')->name('admin.store');
        Route::get('/admin/tambah_user/edit/{id}', 'edit')->name('admin.edit');
        Route::put('/admin/tambah_user/update/{id}', 'update')->name('admin.update');
        Route::post('/admin/{id}/destroy', 'destroy')->name('admin.destroy');
        Route::post('/admin/upload', 'upload')->name('image.upload');
    });
});

// Route Moderator
Route::middleware(['auth', 'check.level:moderator'])->group(function () {
    Route::controller(ModeratorController::class)->group(function () {
        Route::get('/moderator', 'index')->name('moderator');
        Route::get('/moderator/atur_jadwal', 'atur_jadwal')->name('moderator.atur-jadwal.show');
        Route::get('/moderator/riwayat_jadwal', 'riwayat_jadwal')->name('moderator.riwayat-jadwal.show');
        Route::get('/moderator/edit/{id}', 'edit')->name('moderator.edit-jadwal.edit');
        Route::put('/moderator/update/{id}', 'update')->name('moderator.edit-jadwal.update');
        Route::put('/moderator/selesai/{id}', 'selesai')->name('moderator.edit-jadwal.selesai');
        Route::get('/moderator/riwayat_jadwal_detail/{id}', 'riwayat_jadwal_detail')->name('moderator.riwayat_jadwal');
    });
});

// Route Tutor
Route::middleware(['auth', 'check.level:tutor'])->group(function () {
    Route::controller(TutorController::class)->group(function () {
        Route::get('/tutor', 'index')->name('tutor');
        Route::get('/tutor/bimbingan', 'bimbingan')->name('tutor.bimbingan');
        Route::get('/tutor/riwayat', 'riwayat')->name('tutor.riwayat');
        Route::put('/tutor/edit/{id}', 'edit')->name('tutor.edit');
        Route::get('/tutor/detail/{id}', 'detail')->name('tutor.detail');
        Route::put('/tutor/selesai/{id}', 'selesai')->name('tutor.selesai');
        Route::get('/tutor/riwayat_bimbingan_detail/{id}', 'riwayat_bimbingan_detail')->name('tutor.riwayat_bimbingan');
    });
});

Route::middleware('auth', 'check.level:user', 'auth.session', 'verified')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/user', 'index')->name('user.index');
        Route::get('/user/{id}', 'detail')->name('user.detail');
        Route::get('/user/edit/{id}', 'edit')->name('user.edit');
        Route::put('/user/update/profile/{id}', 'update_profile')->name('user.update.profile');
        Route::put('/user/update/email/{id}', 'update_email')->name('user.update.email');
        Route::put('/user/update/password/{id}', 'update_password')->name('user.update.password');
        Route::post('/upload', 'upload')->name('image.upload');
    });
});

// Test Route
Route::get('/test', function () {
    return view('test.test', [
        'title' => 'Test'
    ]);
});

Route::middleware('auth')->group(function () {
    Route::controller(TestController::class)->group(function () {
        Route::get('/midtrans', 'index_midtrans')->name('midtrans.index');
        Route::get('/midtrans/order/{id}', 'order')->name('midtrans.order');
        Route::post('/midtrans/payment/{id}', 'payment')->name('midtrans.payment');
    });
});
Route::get('/purchase', function () {
    return view('purchase.index', [
        'title' => 'Purchase'
    ]);
})->name('purchase.index');
