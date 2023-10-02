<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\InfodeskController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SensorSuhuController;

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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('auth');

Route::get('/dashboard/data-suhu-pengunjung', [DashboardController::class, 'dataSuhuPengunjung'])->middleware('auth');

Route::get('/dashboard/tables-konsultasi-kunjungan', [DashboardController::class, 'tablesKonsulKunjungan'])->middleware('auth');
Route::get('/dashboard/tables-sample-uji', [DashboardController::class, 'tablesUjiSample'])->middleware('auth');

Route::get('/dashboard/profile', [DashboardController::class, 'profile'])->middleware('auth');
Route::put('/dashboard/profile/{user_id}', [DashboardController::class, 'updateProfile'])->middleware('auth');

Route::get('/', [InfodeskController::class, 'index']);

Route::get('/konsultasi-kunjungan', [FormController::class, 'konsulKunjungan']);
Route::post('/konsultasi-kunjungan', [FormController::class, 'konsulKunjunganStore']);

Route::get('/sample-uji', [FormController::class, 'sampleUji']);
Route::post('/sample-uji', [FormController::class, 'sampleUjiStore']);

Route::get('/form/nomor-antrian', [FormController::class, 'ambilNomorAntrian']);

Route::get('/bacasuhu/{suhu}', [SensorSuhuController::class, 'bacasuhu'])->name('bacasuhu');
Route::get('/simpan/{suhu}', [SensorSuhuController::class, 'simpansuhu']);

Route::get('/nomor-antrian/{nomorAntrian}', [SensorSuhuController::class, 'nomorAntrian'])->name('nomorantrian');
Route::get('/simpan-nomor-antrian/{nomorAntrian}', [SensorSuhuController::class, 'simpanNomorAntrian']);