<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\Mencoba_Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EbookController;
use App\Http\Controllers\RiwayatPeminjamanController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AuthController::class)->group(function(){
    Route::post('login', 'login');
    Route::post('register', 'register');
});

Route::get('hello-world',[Mencoba_Controller::class, 'index']);

Route::post('register', [AuthController::class, 'Register']);

Route::post('/auth/register',[AuthController::class,'register']);

Route::post('/ebook', [EBookController::class, 'create']);

Route::prefix('riwayat-peminjaman')->group(function () {
    Route::get('/', [RiwayatPeminjamanController::class, 'index']);
    Route::get('/{id}', [RiwayatPeminjamanController::class, 'show']);
});
