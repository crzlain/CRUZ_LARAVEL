<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('portfolio', function () {
    return view('portfolio');
});
Route::get('welcome', function () {
    return view('welcome');
});
