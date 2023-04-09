<?php

use App\Http\Controllers\postercontroller;
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

Route::get('/', function () {
    return view('/index');
});

Route::post('/pegar-dados-post', [postercontroller::class, 'pegarDadosPost']);


Route::post('/posteres', function () {
    return view('posteres');
});

Route::get('/galeria', function () {
    return view('gallery');
});

Route::get('/radmin', function () {
    return view('/radmin');
});
