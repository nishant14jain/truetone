<?php

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
    return view('home');
});

Route::get('/dyes', function () {
    return view('dyes');
});
Route::get('/fabrics', function () {
    return view('fabrics');
});
Route::get('/yarns', function () {
    return view('yarns');
});
