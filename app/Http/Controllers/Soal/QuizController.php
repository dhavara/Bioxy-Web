<?php

namespace App\Http\Controllers\Soal;

use App\Http\Controllers\Controller;
use App\Models\Difficulty;
use App\Models\Soal;
use Illuminate\Http\Request;
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
        ]);
        return $quiz->show($returnedRequest);
    }

    public function show(Request $request) {
        $data = $request->all();
        $point = 0;
        $health = 5;
        $nomor = 1;
        $benar = 0;
        if (sizeof($data) > 1) { // dalam request terdapat _token, health (size > 1)
            $health = (int) $data['health'];
            if (sizeof($data) > 2) { // dalam request terdapat _token, point, health, dst (size > 2)
                $point = (int) $data['point'];
                $nomor = (int) $data['nomor'];
                $benar = (int) $data['benar'];
            }
            $random = random_int(0, sizeof(Soal::all())-1);
            return view('quiz.quiz', [
                "soal" => Soal::all()[$random],
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
        if($data['correct']) {
            $point += 10;
            $benar++;
        } else {
            $health--;
        }

        if ($health == 0) {
            return view('quiz.quizresult', [
                'point'=>$point,
                'nomor' => $nomor-1,
                'benar'=>$benar
            ]);
        } else {
            $quiz = new QuizController();
            $returnedRequest = new Request([
                '_token'=>$data['_token'],
                'point'=>$point,
                'health'=>$health,
                "nomor" => $nomor,
                'benar'=>$benar
            ]);
            return $quiz->show($returnedRequest);
        }

    }
}
