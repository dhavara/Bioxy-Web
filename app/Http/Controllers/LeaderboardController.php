<?php

namespace App\Http\Controllers;

use App\Models\UserHistory;
use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    //
    public function index() // saat kita mengetikkan /profile di uri
    {
        return view('leaderboard', [
            'active_leaderboard' => "active",
            "easy" => UserHistory::where('difficulty', 1)->get()->sortByDesc('point')->take(10),
            "medium" => UserHistory::where('difficulty', 2)->get()->sortByDesc('point')->take(10),
            "hard" => UserHistory::where('difficulty', 3)->get()->sortByDesc('point')->take(10),
            "vhard" => UserHistory::where('difficulty', 4)->get()->sortByDesc('point')->take(10)
        ]);
    }
}
