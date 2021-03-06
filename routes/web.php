<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',[App\Http\Controllers\PageController::class, 'getIndex']);
Route::get('/trang-chu',[App\Http\Controllers\PageController::class, 'getIndex']);
Route::get('/loai_san_pham',[App\Http\Controllers\PageController::class, 'loaiSanpham']);
Route::get('/chitiet_sanpham',[App\Http\Controllers\PageController::class, 'chitiet_sanpham']);
Route::get('/lienhe',[App\Http\Controllers\PageController::class, 'lienhe']);