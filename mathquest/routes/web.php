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

Route::get('/score',  [leaderboardController::class, 'showLeaderboard'])->name('submit_score');

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

Route::post('/computeScoreEasyMul', [leaderboardController::class, 'computeScoreEasyMul'])->name('compute_score_easy_mul');

Route::post('/computeScoreEasyDiv', [leaderboardController::class, 'computeScoreEasyDiv'])->name('compute_score_easy_div');

Route::post('/computeScoreAveMul', [leaderboardController::class, 'computeScoreAveMul'])->name('compute_score_ave_mul');

Route::post('/computeScoreAveDiv', [leaderboardController::class, 'computeScoreAveDiv'])->name('compute_score_ave_div');

Route::post('/computeScoreDiffMul', [leaderboardController::class, 'computeScoreDiffMul'])->name('compute_score_diff_mul');

Route::post('/computeScoreDiffDiv', [leaderboardController::class, 'computeScoreDiffDiv'])->name('compute_score_diff_div');

// Route::post('/checkAnswers', [leaderboardController::class, 'checkAnswers'])->name('take_information');
// Route::post('/submitScore', 'leaderboardController@submitScore');