<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\InfodeskController;
use App\Http\Controllers\DashboardController;

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

Route::get('/login', [LoginController::class, 'index']);

Route::get('/', [InfodeskController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'dashboard']);

Route::get('/dashboard/data-suhu-pengunjung', [DashboardController::class, 'dataSuhuPengunjung']);

Route::get('/konsultasi-kunjungan', [FormController::class, 'konsulKunjungan']);
Route::post('/konsultasi-kunjungan', [FormController::class, 'konsulKunjunganStore']);

Route::get('/sample-uji', [FormController::class, 'sampleUji']);
Route::post('/sample-uji', [FormController::class, 'sampleUjiStore']);

Route::get('/dashboard/tables-konsultasi-kunjungan', [DashboardController::class, 'tablesKonsulKunjungan']);
Route::get('/dashboard/tables-sample-uji', [DashboardController::class, 'tablesUjiSample']);

Route::get('/dashboard/profile', [DashboardController::class, 'profile']);