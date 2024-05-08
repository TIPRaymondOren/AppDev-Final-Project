<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\leaderboard;

class leaderboardController extends Controller
{
    public function submitScore(Request $request) 
    {
        $name = $request->input('name');
        $score = $request->input('finalScore');
        $difficulty = $request->input('difficulty');

        $leaderboard = new leaderboard();
        $leaderboard->name = $name;
        $leaderboard->score = $score;
        $leaderboard->difficulty = $difficulty;
        // $leaderboard->save();

        return response()->json(['message' => 'User record saved successfully']);
    }

    public function takeInformation(Request $request) {
        $name = $request->input('name');
        $score = $request->input('score');
        $difficulty = $request->input('difficulty');
        // $difficulty = "diff here";

        return response()->json(['name' => $name, 'score' => $score, 'difficulty' => $difficulty]);
    }
}