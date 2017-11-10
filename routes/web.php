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
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/terms', function () {
    return view('terms');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/dye-kits', function () {
    return view('dye-kits');
});
