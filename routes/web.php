<?php

use App\Http\Controllers\RoutesController;
use Illuminate\Support\Facades\Route;

Route::get('/',[RoutesController::class,'index']);

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/predprvnicestou.html', function () {
    return view('predprvnicestou');
});

Route::get('/index.html', function () {
    return view('index');
});