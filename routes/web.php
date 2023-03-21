<?php

use App\Models\Round;
use App\Models\Category;
use App\Models\Handicap;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoundController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\ArcherController;
use App\Http\Controllers\CategoryController;
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
    return view('index');
});
Route::get('about', function () {
    return view('about');
});
Route::get('/Scores/create/{name?}', [ScoreController::class, 'create'])->name('Scores.create');
Route::get('/Handicaps/create/{name?}', [HandicapController::class, 'create'])->name('Handicaps.create');
Route::get('/profile/{user}',[UserController::class, 'show']);


Route::resource('Categories', CategoryController::class);
Route::resource('Rounds', RoundController::class);
Route::resource('Scores',ScoreController::class)->except('create');
Route::resource('Handicaps',HandicapController::class)->except('create');
Route::resource('Archers',ArcherController::class);





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
