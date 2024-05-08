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

    public function computeScore(Request $request) {

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
        // return response()->json(['score' => $score]);
        // return response()->json(['name' => $name]);
        // return response()->json($request);
        return redirect("/score");
    }
}