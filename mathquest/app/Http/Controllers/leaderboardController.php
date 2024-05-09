<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\leaderboard;

class leaderboardController extends Controller
{
    public function submitScore($name, $score, $difficulty) 
    {
        $leaderboardModel = new leaderboard();
        $leaderboardModel->name = $name;
        $leaderboardModel->score = $score;
        $leaderboardModel->difficulty = $difficulty;
        $leaderboardModel->save();
    }

    public function computeScoreEasyMul(Request $request) {

        // Data from the JSON file sent by the form
        $answer1 = $request->input('item-one');
        $answer2 = $request->input('item-two');
        $answer3 = $request->input('item-three');
        $answer4 = $request->input('item-four');
        $answer5 = $request->input('item-five');
        $name = $request->input('name');
        $difficulty = $request->input('difficulty');

        // Local variables for organization and processing
        $userAnswer = [$answer1, $answer2, $answer3, $answer4, $answer5];
        $score = 0;
        $correctAnswers = ["b", "c", "c", "d", "c"];

        // Foreach loop for calculating the score
        foreach ($userAnswer as $index => $answer) {
            if ($answer === $correctAnswers[$index]) {
                $score++;
            }
        }

        $this->submitScore($name, $score, $difficulty);
        return view('mainapp.score', ['score' => $score]);
    }

    public function computeScoreEasyDiv(Request $request) {

        // Data from the JSON file sent by the form
        $answer1 = $request->input('item-one');
        $answer2 = $request->input('item-two');
        $answer3 = $request->input('item-three');
        $answer4 = $request->input('item-four');
        $answer5 = $request->input('item-five');
        $name = $request->input('name');
        $difficulty = $request->input('difficulty');

        // Local variables for organization and processing
        $userAnswer = [$answer1, $answer2, $answer3, $answer4, $answer5];
        $score = 0;
        $correctAnswers = ["b", "b", "c", "b", "b"];

        // Foreach loop for calculating the score
        foreach ($userAnswer as $index => $answer) {
            if ($answer === $correctAnswers[$index]) {
                $score++;
            }
        }

        $this->submitScore($name, $score, $difficulty);
        // return response()->json($request);
        return view('mainapp.score', ['score' => $score]);
    }

    public function computeScoreAveMul(Request $request) {

        // Data from the JSON file sent by the form
        $answer1 = $request->input('item-one');
        $answer2 = $request->input('item-two');
        $answer3 = $request->input('item-three');
        $answer4 = $request->input('item-four');
        $answer5 = $request->input('item-five');
        $name = $request->input('name');
        $difficulty = $request->input('difficulty');

        // Local variables for organization and processing
        $userAnswer = [$answer1, $answer2, $answer3, $answer4, $answer5];
        $score = 0;
        $correctAnswers = ["I", "P", "H", "C", "G"];

        // Foreach loop for calculating the score
        foreach ($userAnswer as $index => $answer) {
            if ($answer === $correctAnswers[$index]) {
                $score++;
            }
        }

        $this->submitScore($name, $score, $difficulty);
        return view('mainapp.score', ['score' => $score]);
    }

    public function computeScoreAveDiv(Request $request) {

        // Data from the JSON file sent by the form
        $answer1 = $request->input('item-one');
        $answer2 = $request->input('item-two');
        $answer3 = $request->input('item-three');
        $answer4 = $request->input('item-four');
        $answer5 = $request->input('item-five');
        $name = $request->input('name');
        $difficulty = $request->input('difficulty');

        // Local variables for organization and processing
        $userAnswer = [$answer1, $answer2, $answer3, $answer4, $answer5];
        $score = 0;
        $correctAnswers = ["F", "C", "E", "H", "B"];

        // Foreach loop for calculating the score
        foreach ($userAnswer as $index => $answer) {
            if ($answer === $correctAnswers[$index]) {
                $score++;
            }
        }

        $this->submitScore($name, $score, $difficulty);
        return view('mainapp.score', ['score' => $score]);
    }

    public function computeScoreDiffMul(Request $request) {

        // Data from the JSON file sent by the form
        $answer1 = $request->input('item-one');
        $answer2 = $request->input('item-two');
        $answer3 = $request->input('item-three');
        $answer4 = $request->input('item-four');
        $answer5 = $request->input('item-five');
        $name = $request->input('name');
        $difficulty = $request->input('difficulty');

        // Local variables for organization and processing
        $userAnswer = [$answer1, $answer2, $answer3, $answer4, $answer5];
        $score = 0;
        $correctAnswers = ["28", "84", "24", "10", "2850"];

        // Foreach loop for calculating the score
        foreach ($userAnswer as $index => $answer) {
            if ($answer === $correctAnswers[$index]) {
                $score++;
            }
        }

        $this->submitScore($name, $score, $difficulty);
        return view('mainapp.score', ['score' => $score]);
    }

    public function computeScoreDiffDiv(Request $request) {

        // Data from the JSON file sent by the form
        $answer1 = $request->input('item-one');
        $answer2 = $request->input('item-two');
        $answer3 = $request->input('item-three');
        $answer4 = $request->input('item-four');
        $answer5 = $request->input('item-five');
        $name = $request->input('name');
        $difficulty = $request->input('difficulty');

        // Local variables for organization and processing
        $userAnswer = [$answer1, $answer2, $answer3, $answer4, $answer5];
        $score = 0;
        $correctAnswers = ["3", "8", "30", "16", "10"];

        // Foreach loop for calculating the score
        foreach ($userAnswer as $index => $answer) {
            if ($answer === $correctAnswers[$index]) {
                $score++;
            }
        }

        $this->submitScore($name, $score, $difficulty);
        
        return view('mainapp.score', ['score' => $score]);
    }

    public function showLeaderboard() {
        // Sort the data from the database into descending order based on their score.
        $leaderboards = leaderboard::orderBy('score', 'desc')->get(); 
        return view('mainapp.leaderboards', ['leaderboards' => $leaderboards]);
    }
}