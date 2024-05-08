<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\leaderboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/land', function () {
    return view('mainapp/landing');
});

Route::get('/lesson', function () {
    return view('mainapp/lesson');
});

Route::get('/leaderboards', [leaderboardController::class, 'showLeaderboard'])->name('submit_score');

Route::get('/score', function () {
    return view('mainapp/score');
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

Route::get('/nav', function () {
    return view('mainapp/nav');
});

Route::get('/easy-quiz-mul', function () {
    return view('mainapp/easy-quiz-mul');
});
Route::get('/easy-quiz-div', function () {
    return view('mainapp/easy-quiz-div');
});
Route::get('/average-quiz-mul', function () {
    return view('mainapp/average-quiz-mul');
});

Route::get('/average-quiz-div', function () {
    return view('mainapp/average-quiz-div');
});

Route::get('/difficult-quiz-mul', function () {
    return view('mainapp/difficult-quiz-mul');
});

Route::get('/difficult-quiz-div', function () {
    return view('mainapp/difficult-quiz-div');
});

Route::post('/submitScore', [leaderboardController::class, 'submitScore'])->name('submit_score');

Route::post('/computeScore', [leaderboardController::class, 'computeScore'])->name('compute_score');

// Route::post('/checkAnswers', [leaderboardController::class, 'checkAnswers'])->name('take_information');
// Route::post('/submitScore', 'leaderboardController@submitScore');