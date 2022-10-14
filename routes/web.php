<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\RolController;


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
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/pengguna', [PenggunaController::class, 'index']);
Route::get('/pengguna/create', [PenggunaController::class, 'create']);
Route::post('/pengguna', [PenggunaController::class, 'store']);
Route::delete('/{pengguna}', [PenggunaController::class, 'destroy']);
Route::get('/{pengguna}/edit', [PenggunaController::class, 'edit']);
Route::patch('/pengguna/{pengguna}', [PenggunaController::class, 'update']);
Route::get('/rol', [RolController::class, 'index']);
