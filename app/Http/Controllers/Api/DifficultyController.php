<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Auth\IpController;
use App\Http\Controllers\Controller;
use App\Http\Resources\DifficultyResource;
use App\Models\Difficulty;
use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DifficultyController extends Controller
{
    //
    public function difficulty() {
        $soal = Difficulty::all();

        $ip = new IpController();
        Log::create([
            'table' => 'bio11_difficulties',
            'creator' => Auth::user()->id,
            'path' => "Api\DifficultyController@index",
            'desc' => "View all data in Difficulty",
            'ip' => $ip->getIp()
        ]);
        
        return [
            'message' => 'Sukses! Data telah diambil.',
            'difficulty' => DifficultyResource::collection($soal)
        ];
    }
}
