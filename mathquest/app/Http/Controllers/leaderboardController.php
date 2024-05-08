<?php

namespace App\Http\Controllers;

use App\Models\leaderboard;
use Illuminate\Http\Request;

class leaderboardController extends Controller
{
    public function submitScore(Request $request) 
    {
        $data = $request -> validate([
            'name' => 'required',
            'score' => 'required',
            'difficulty' => 'required',
        ]);

        leaderboard::create($data);

        return redirect('/')->with('success', 'Score submitted successfully');
    }
}