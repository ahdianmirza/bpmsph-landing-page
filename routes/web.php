<?php

use App\Http\Controllers\AntrianController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\InfodeskController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SensorSuhuController;
use App\Http\Controllers\UlasanController;

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

Route::get('/notif/checked', [DashboardController::class, 'notifCheckedAll'])->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('auth');

Route::get('/dashboard/data-pegawai', [DashboardController::class, 'dataPegawai'])->middleware('auth');
Route::get('/dashboard/data-pegawai/create', [DashboardController::class, 'dataPegawaiCreate'])->middleware('auth');
Route::post('/dashboard/data-pegawai/create', [DashboardController::class, 'dataPegawaiStore'])->middleware('auth');
Route::delete('/dashboard/data-pegawai/{pegawai_id}/delete', [DashboardController::class, 'dataPegawaiDestroy'])->middleware('auth');

Route::get('/dashboard/antrian', [AntrianController::class, 'index'])->middleware('auth');
Route::put('/dashboard/antrian/selesai', [AntrianController::class, 'antrianSelesai'])->middleware('auth');
Route::put('/dashboard/antrian/{id}/proses', [AntrianController::class, 'antrianProses'])->middleware('auth');
Route::put('/dashboard/antrian/{id}/menunggu', [AntrianController::class, 'antrianMenunggu'])->middleware('auth');
Route::delete('/dashboard/antrian/destroy', [AntrianController::class, 'destroyAntrianSelesai'])->middleware('auth');

Route::get('/dashboard/data-suhu-pengunjung', [DashboardController::class, 'dataSuhuPengunjung'])->middleware('auth');
Route::get('/dashboard/tables-konsultasi-kunjungan', [DashboardController::class, 'tablesKonsulKunjungan'])->middleware('auth');
Route::get('/dashboard/tables-sample-uji', [DashboardController::class, 'tablesUjiSample'])->middleware('auth');
Route::get('/dashboard/tables-ulasan', [DashboardController::class, 'tablesUlasan'])->middleware('auth');

// Export Excel
Route::get('/dashboard/konsultasi-kunjungan/table', [DashboardController::class, 'indexExportExcelKonsulKunjungan'])->middleware('auth');
Route::get('/dashboard/konsultasi-kunjungan/export', [DashboardController::class, 'exportExcelKonsulKunjungan'])->middleware('auth');
Route::get('/dashboard/sample-uji/table', [DashboardController::class, 'indexExportExcelSample'])->middleware('auth');
Route::get('/dashboard/sample-uji/export', [DashboardController::class, 'exportExcelSample'])->middleware('auth');
Route::get('/dashboard/ulasan/table', [DashboardController::class, 'indexExportExcelUlasan'])->middleware('auth');
Route::get('/dashboard/ulasan/export', [DashboardController::class, 'exportExcelUlasan'])->middleware('auth');
Route::get('/dashboard/suhu/table', [DashboardController::class, 'indexExportExcelSuhu'])->middleware('auth');
Route::get('/dashboard/suhu/export', [DashboardController::class, 'exportExcelSuhu'])->middleware('auth');

Route::get('/dashboard/notifikasi', [DashboardController::class, 'notifikasiIndex'])->middleware('auth');

Route::get('/dashboard/profile', [DashboardController::class, 'profile'])->middleware('auth');
Route::put('/dashboard/profile/{user_id}', [DashboardController::class, 'updateProfile'])->middleware('auth');

Route::get('/', [InfodeskController::class, 'index']);
Route::post('/pesan', [InfodeskController::class, 'pesanStore']);

Route::get('/konsultasi-kunjungan', [FormController::class, 'konsulKunjungan']);
Route::post('/konsultasi-kunjungan', [FormController::class, 'konsulKunjunganStore']);

Route::get('/sample-uji', [FormController::class, 'sampleUji']);
Route::post('/sample-uji', [FormController::class, 'sampleUjiStore']);

Route::get('/ulasan', [UlasanController::class, 'index']);
Route::post('/ulasan', [UlasanController::class, 'ulasanStore']);
Route::get('/ulasan/ikm', [UlasanController::class, 'ikmIndex']);


Route::get('/form/nomor-antrian', [FormController::class, 'ambilNomorAntrian']);

Route::get('/bacasuhu/{suhu}', [SensorSuhuController::class, 'bacasuhu'])->name('bacasuhu');
Route::get('/simpan/{suhu}', [SensorSuhuController::class, 'simpansuhu']);

Route::get('/nomor-antrian/{nomorAntrian}', [SensorSuhuController::class, 'nomorAntrian'])->name('nomorantrian');
Route::get('/simpan-nomor-antrian/{nomorAntrian}', [SensorSuhuController::class, 'simpanNomorAntrian']);