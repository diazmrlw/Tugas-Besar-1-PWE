<?php

use App\Http\Controllers\newfileview;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenjualanController;
;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('newfileview', function () {
    //return view('newfileview');
//});

Route::get('/newfileview', [newfileview::class, 'TampilContoh']);
Route::get('/product', [PenjualanController::class, 'index']);
Route::get('/produk/add', [PenjualanController::class, 'ViewAddProduk']);
Route::post('/produk/add', [PenjualanController::class, 'CreateProduk']);


