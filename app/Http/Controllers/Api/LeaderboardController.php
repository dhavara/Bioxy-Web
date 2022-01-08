<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Auth\IpController;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserHistoryResource;
use App\Models\Log;
use App\Models\UserHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaderboardController extends Controller
{
    //
    public function leaderboard() {
        $easy = UserHistoryResource::collection(UserHistory::where('difficulty', 1)->get()->sortByDesc('point')->take(10));
        $medium = UserHistoryResource::collection(UserHistory::where('difficulty', 2)->get()->sortByDesc('point')->take(10));
        $hard = UserHistoryResource::collection(UserHistory::where('difficulty', 3)->get()->sortByDesc('point')->take(10));
        $vhard = UserHistoryResource::collection(UserHistory::where('difficulty', 4)->get()->sortByDesc('point')->take(10));

        $lb = array();
        $lb = array_merge( $easy->all(),  $medium->all(),  $hard->all(),  $vhard->all());


        $ip = new IpController();
        Log::create([
            'table' => 'bio11_users_histories',
            'creator' => Auth::user()->id,
            'path' => "Api\LeaderboardController@leaderboard",
            'desc' => "View top 10 datas in User History",
            'ip' => $ip->getIp()
        ]);
        
        return [
            'message' => 'Sukses! Data telah diambil.',
            'leaderboards' => $lb
        ];
    }
}
