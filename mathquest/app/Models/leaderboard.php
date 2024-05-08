<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leaderboard extends Model
{
    use HasFactory;
    protected $table = 'leaderboards';

    protected $fillable = ['name', 'score', 'difficulty'];
};
