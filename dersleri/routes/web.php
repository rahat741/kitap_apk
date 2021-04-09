<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;

Route::get('/index', function () {
    return view('frontend.index');
});
Route::get('/haberler',[App\Http\Controllers\homecontroller::class, 'get_haberler']);
Route::post('/haberler',[App\Http\Controllers\homecontroller::class, 'post_haberler']);


