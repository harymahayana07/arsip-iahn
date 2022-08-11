<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PrintController;
use App\Http\Controllers\Admin\LetterController;
use App\Http\Controllers\Admin\SenderController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\DisposisiController;
use App\Http\Controllers\Admin\LetteroutController;

use App\Models\Department;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return view('welcome');
});
Route::get('/logins', [LoginController::class, 'index']);

// Authentication
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//Admin
Route::prefix('admin')
    ->middleware('auth')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin-dashboard');
        //Department / department pengirim
        Route::resource('/department', DepartmentController::class);
        //sender / pengirim pribadi
        Route::resource('/sender', SenderController::class);
        // letter / surat masuk
        Route::resource('/letter', LetterController::class, ['except' => ['show']]);
        Route::get('letter/surat-masuk', [LetterController::class, 'incoming_mail'])->name('surat-masuk');
        Route::get('letter/surat/{id}', [LetterController::class, 'show'])->name('detail-surat');
        Route::get('letter/download/{id}', [LetterController::class, 'download_letter'])->name('download-surat');       
        // letterout / surat keluar
        Route::resource('/letterout', LetteroutController::class, ['except' => ['show']]);
        Route::get('letterout/surat-keluar', [LetteroutController::class, 'outgoing_mail'])->name('surat-keluar');
        Route::get('letterout/surat/{id}', [LetteroutController::class, 'show'])->name('detail-surat-keluar');
        Route::get('letterout/download/{id}', [LetteroutController::class, 'download_letter'])->name('download-surat-keluar');
        // disposisi / pengajuan disposisi
        Route::resource('/disposisi', DisposisiController::class, ['except' => ['show']]);
        Route::get('disposisi/surat-disposisi', [DisposisiController::class, 'disposisi_form'])->name('surat-disposisi');
        Route::get('disposisi/surat/{id}', [DisposisiController::class, 'show'])->name('detail-disposisi');
        //print
        Route::get('print/surat-masuk', [PrintController::class, 'index'])->name('print-surat-masuk');
        Route::get('print/surat-keluar', [PrintController::class, 'outgoing'])->name('print-surat-keluar');
    Route::get('print/surat-disposisi', [PrintController::class, 'outgoing'])->name('print-surat-disposisi');
        // user dan setting
        Route::resource('user', UserController::class);
        Route::resource('setting', SettingController::class, ['except' => ['show']]);
        Route::get('setting/password', [SettingController::class, 'change_password'])->name('change-password');
        Route::post('setting/upload-profile', [SettingController::class, 'upload_profile'])->name('profile-upload');
        Route::post('change-password', [SettingController::class, 'update_password'])->name('update.password');
    });
