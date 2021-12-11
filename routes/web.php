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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bb/b1',function(){
    return view('bb.b1');
});
Route::get('/bb/b2',function(){
    return view('bb.b2');
});
Route::get('/dd/d1',function(){
    return view('dd.d1');
});
Route::get('/dd/d2',function(){
    return view('dd.d2');
});
