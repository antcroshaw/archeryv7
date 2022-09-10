<?php

use App\Http\Controllers\ArcherController;
use App\Models\Category;
use App\Models\Round;
use App\Models\Handicap;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RoundController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\HandicapController;

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
    return view('welcome');
});


Route::resource('Handicaps',HandicapController::class);
Route::resource('Categories', CategoryController::class);
Route::resource('Rounds', RoundController::class);
Route::resource('Scores',ScoreController::class);
Route::resource('Archers',ArcherController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
