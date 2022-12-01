<?php

use App\Http\Controllers\RoundController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/Rounds/{id}/inc', [RoundController::class, 'inc'])->name('handicapInc');
Route::get('/Rounds/{id}/dec', [RoundController::class, 'dec'])->name('handicapDec');


