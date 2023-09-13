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

Route::get('/', [InfodeskController::class, 'index']);
Route::get('/konsultasi-kunjungan', [FormController::class, 'konsulKunjungan']);
Route::get('/sample-uji', [FormController::class, 'sampleUji']);
Route::post('/sample-uji', [FormController::class, 'sampleUjiStore']);
Route::get('/dashboard/tables-sample-uji', [DashboardController::class, 'tablesIndex']);