<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get-submit', [ApiController::class, 'getSubmit']);
Route::post('/post-submit', [ApiController::class, 'postSubmit']);
Route::post('/post-nomor-antrian', [ApiController::class, 'postNomorAntrian']);
Route::get('/get-nomor-antrian', [ApiController::class, 'getNomorAntrian']);
Route::get('/get-suhu', [ApiController::class, 'getSuhu']);
Route::post('/post-suhu', [ApiController::class, 'postSuhu']);
Route::get('/get-posisi', [ApiController::class, 'getPosisi']);
Route::post('/post-posisi', [ApiController::class, 'postPosisi']);
Route::get('/get-antrian', [ApiController::class, 'getAntrian']);
Route::get('/get-antrian-proses', [ApiController::class, 'getAntrianProses']);
Route::get('/get-data-pegawai', [ApiController::class, 'getDataPegawai']);
Route::get('/total-visitors-per-week', [ApiController::class, 'getTotalVisitorsPerWeek']);