<?php

namespace App\Http\Controllers\Api\Quiz;

use App\Http\Controllers\Auth\IpController;
use App\Http\Controllers\Controller;
use App\Http\Resources\SoalResource;
use App\Http\Resources\DifficultyResource;
use App\Models\Difficulty;
use App\Models\Log;
use App\Models\UserDetail;
use App\Models\UserHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    //
    public function quiz(int $difficulty) {
        $soal = Difficulty::where('id', $difficulty)->get()->first()->soals()->get()->random(1)->first()->soal()->get();

        $ip = new IpController();
        Log::create([
            'table' => 'bio11_soals',
            'creator' => Auth::user()->id,
            'path' => "Api\QuizController@quiz",
            'desc' => "Show random data in Soal",
            'ip' => $ip->getIp()
        ]);

        return [
            'message' => 'Sukses! Data telah diambil.',
            'soals' => SoalResource::collection($soal)
        ];
    }

    public function store(Request $request) { // dalam request terdapat difficulty, point, total_correct, total_question
        
        $accuracy = 0;
        if ($request->total_question > 1) {
            $accuracy = ceil($request->total_correct * 100 / $request->total_question);
        }

        UserHistory::create([
            'user_id' => Auth::user()->id,
            'difficulty' => Difficulty::where('difficulty', $request->difficulty)->first()->id,
            'point' => $request->point,
            'accuracy' => $accuracy,
            'total_correct' => $request->total_correct,
            'total_question' => $request->total_question
        ]);

        
        $ip = new IpController();
        Log::create([
            'table' => 'bio11_users_histories',
            'creator' => Auth::user()->id,
            'path' => "Api\QuizController@result",
            'desc' => "Create new data in User History",
            'ip' => $ip->getIp()
        ]);

        $pointDifficulty = $request->point;
        switch ($request->difficulty) {
            case 1:
                $pointDifficulty *= 1;
                break;
            case 2:
                $pointDifficulty *= 2;
                break;
            case 3:
                $pointDifficulty *= 3;
                break;
            case 4:
                $pointDifficulty *= 5;
                break;
        }

        UserDetail::where('user_id', Auth::user()->id)->increment('point', $pointDifficulty);

        Log::create([
            'table' => 'bio11_users_details',
            'creator' => Auth::user()->id,
            'path' => "Api\QuizController@result",
            'desc' => "Update user total point in User Detail",
            'ip' => $ip->getIp()
        ]);

        return [
            'message' => 'Sukses! Data telah tersimpan.',
        ];
    }
}
