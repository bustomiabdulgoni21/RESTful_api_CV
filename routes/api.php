<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\riwayathidupController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Data Riwayat Hidup
Route::get('/tampil_riwayat', [riwayathidupController::class, 'index']);
Route::post('/tambah_riwayat', [riwayathidupController::class, 'store']);
Route::get('/tampil_riwayat/{id_pendaftar}', [riwayathidupController::class, 'show']);
Route::put('/ubah_riwayat/{id_pendaftar}', [riwayathidupController::class, 'update']);
Route::delete('/hapus_riwayat/{id_pendaftar}', [riwayathidupController::class, 'destroy']);
// AKhir Data Riwayat Hidup
