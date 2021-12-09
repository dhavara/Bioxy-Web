<?php

namespace App\Http\Controllers\Soal;

use App\Http\Controllers\Auth\IpController;
use App\Http\Controllers\Controller;
use App\Models\Difficulty;
use App\Models\Log;
use App\Models\Soal;
use App\Models\UserHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class QuizController extends Controller
{
    
    public function difficulty(Request $request) {
        $data = $request->all();

        if (sizeof($data) <= 1) return redirect('quiz');

        $health = Difficulty::where('difficulty', $data['difficulty'])->get()->first()['health'];
        
        $quiz = new QuizController();
        $returnedRequest = new Request([
            '_token'=>$data['_token'],
            'health'=>$health,
            'difficulty'=>Difficulty::where('difficulty', $data['difficulty'])->get()->first()['id']
        ]);
        return $quiz->show($returnedRequest);
    }

    public function show(Request $request) {
        $data = $request->all();
        $point = 0;
        $health = 5;
        $nomor = 1;
        $benar = 0;
        if (sizeof($data) > 2) { // dalam request terdapat _token, health, difficulty (size > 2)
            $health = (int) $data['health'];
            $difficulty = $data['difficulty'];
            if (sizeof($data) > 3) { // dalam request terdapat _token, point, health, dst (size > 3)
                $point = (int) $data['point'];
                $nomor = (int) $data['nomor'];
                $benar = (int) $data['benar'];
            }
            $random = random_int(0, sizeof(Soal::all())-1);
            return view('quiz.quiz', [
                "soal" => Soal::all()[$random],
                "difficulty"=>$difficulty,
                "point" => $point,
                "health" => $health,
                "nomor" => $nomor,
                "benar" => $benar
            ]);
        }
        else { // hanya ngepassing _token
            return view('quiz.choosedifficulty', [
                "difficulty" => Difficulty::all()
            ]);
        }
    }

    public function check(Request $request) {
        $data = $request->all();
        $point = (int) $data['point'];
        $health = (int) $data['health'];
        $nomor = (int) $data['nomor'] + 1;
        $benar = (int) $data['benar'];
        $difficulty = $data['difficulty'];
        if($data['correct']) {
            $point += 10;
            $benar++;
        } else {
            $health--;
        }

        if ($health == 0) { // game over
            $quiz = new QuizController();
            $returnedRequest = new Request([
                '_token'=>$data['_token'],
                "difficulty"=>$difficulty,
                'point'=>$point,
                "nomor" => $nomor,
                'benar'=>$benar
            ]);
            return $quiz->result($request);
        } else {
            $quiz = new QuizController();
            $returnedRequest = new Request([
                '_token'=>$data['_token'],
                "difficulty"=>$difficulty,
                'point'=>$point,
                'health'=>$health,
                "nomor" => $nomor,
                'benar'=>$benar
            ]);
            return $quiz->show($returnedRequest);
        }

    }

    public function result(Request $request) {
        $data = $request->all();

        $point = (int) $data['point'];
        $nomor = (int) $data['nomor'];
        $benar = (int) $data['benar'];
        $difficulty = $data['difficulty'];
        
        $akurasi = 0;
        if ($nomor > 1) {
            $akurasi = ceil($benar*100/$nomor);
        }

        UserHistory::create([
            'user_id' => Auth::user()->id,
            'difficulty' => $difficulty,
            'point' => $point,
            'accuracy' => $akurasi,
            'total_correct' => $benar,
            'total_question' => $nomor
        ]);

        $ip = new IpController();
        Log::create([
            'table'=>'bio11_users',
            'creator'=> Auth::user()->id,
            'path' => "QuizController@result",
            'desc' => "Create new data in User History",
            'ip' => $ip->getIp()
        ]);

        return view('quiz.quizresult', [
            'point'=>$point,
            'nomor' => $nomor,
            'benar'=>$benar,
            'akurasi'=>$akurasi
        ]);
    }
}
