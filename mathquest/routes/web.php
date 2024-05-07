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

Route::get('/category', function () {
    return view('mainapp/category');
});

Route::get('/lesson-one-mul', function () {
    return view('mainapp/lesson-one-mul');
});

Route::get('/lesson-two-mul', function () {
    return view('mainapp/lesson-two-mul');
});

Route::get('/lesson-three-mul', function () {
    return view('mainapp/lesson-three-mul');
});

Route::get('/lesson-one-div', function () {
    return view('mainapp/lesson-one-div');
});

Route::get('/lesson-two-div', function () {
    return view('mainapp/lesson-two-div');
});

Route::get('/lesson-three-div', function () {
    return view('mainapp/lesson-three-div');
});