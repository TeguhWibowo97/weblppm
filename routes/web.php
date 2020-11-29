<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PenelitianController;
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

Route::get('/', [PagesController::class, 'home']);
Route::get('/sejarahsingkat', [PagesController::class, 'sejarahsingkat']);
Route::get('/visimisi', [PagesController::class, 'visimisi']);
Route::get('/kontak', [PagesController::class, 'kontak']);
Route::get('/statistik', [PagesController::class, 'statistik']);

Route::get('/penelitian',[PenelitianController::class, 'penelitian']);
Route::get('/pengabdian',[PenelitianController::class, 'pengabdian']);
Route::get('/prosiding',[PenelitianController::class, 'prosiding']);
Route::get('/tugasakhir',[PenelitianController::class, 'tugasakhir']);

// Route::get('/','PagesController@home');