<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/land', function () {
    return view('mainapp/landing');
});

Route::get('/lesson', function () {
    return view('mainapp/lesson');
});