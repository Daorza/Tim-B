<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisuserController;
use App\Http\Controllers\LoguserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\UserController;


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

Route::get('/', function () {
    return view('landing');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/login', [LoguserController::class, 'index'])->name('login');

Route::post('/login', [LoguserController::class, 'login']);

Route::get('/user/logout', [LoguserController::class, 'logout'])->name('user.logout');


Route::get('/admin/dashboard', [LoguserController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/pegawai/dashboard', [LoguserController::class, 'dsb'])->name('pegawai.dashboard');


// Rute untuk Pegawai
Route::resource('pegawai', 'PegawaiController');

// Rute untuk User
Route::resource('user', 'UserController');

// Rute untuk Dokter
Route::resource('dokter', 'DokterController');

// Rute untuk Pasien
Route::resource('pasien', 'PasienController');

// Rute untuk Pemeriksaan
Route::resource('pemeriksaan', 'PemeriksaanController');

// Rute untuk Obat
Route::resource('obat', 'ObatController');
