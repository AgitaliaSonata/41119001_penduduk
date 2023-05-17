<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\KotaController;
use App\Http\Controllers\API\PendudukController;
use App\Http\Controllers\API\PropinsiController;

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
Route::get('propinsi', [PropinsiController::class, 'index']);
Route::post('propinsi/store', [PropinsiController::class, 'store']);
Route::get('penduduk', [PendudukController::class, 'index']);
Route::get('kota', [KotaController::class, 'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
