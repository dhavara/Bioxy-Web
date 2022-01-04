<?php

namespace App\Http\Controllers\Soal;

use App\Http\Controllers\Auth\IpController;
use App\Http\Controllers\Controller;
use App\Models\Difficulty;
use App\Models\Log;
use App\Models\Soal;
use App\Models\UserDetail;
use App\Models\UserHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

use function PHPUnit\Framework\isEmpty;

class QuizController extends Controller
{

    public function difficulty(Request $request)
    {
        $data = $request->all();

        if (sizeof($data) <= 1) return redirect('quiz');

        $health = Difficulty::where('difficulty', $data['difficulty'])->get()->first()['health'];

        $returnedRequest = new Request([
            '_token' => $data['_token'],
            'health' => $health,
            'difficulty' => Difficulty::where('difficulty', $data['difficulty'])->get()->first()['id']
        ]);
        return redirect()->back()->with('checkpoint', $returnedRequest);
    }

    public function show(Request $request)
    {
        // jika sudah selesai
        if (session()->has('result')) {
            $data = session()->all()['result']->all();
            $quiz = new QuizController();
            $returnedRequest = new Request([
                '_token' => $data['_token'],
                'difficulty' => $data['difficulty'],
                'point' => $data['point'],
                'nomor' => $data['nomor'],
                'benar' => $data['benar'],
                'akurasi' => $data['akurasi'],
                'pointDifficulty' => $data['pointDifficulty']
            ]);
            return $quiz->result($returnedRequest);
        }
        // jika sudah checking jawaban
        else if (session()->has('checkpoint')) {
            $data = session()->all()['checkpoint']->all();
        }
        // jika belum
        else {
            $data = $request->all();
        }

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
            return view('quiz.quiz', [
                'active_quiz' => "active",
                "soal" => Difficulty::where('id', $difficulty)->get()->first()->soals()->get()->random(1)->first()->soal()->get()->first(),
                "difficulty" => $difficulty,
                "point" => $point,
                "health" => $health,
                "nomor" => $nomor,
                "benar" => $benar
            ]);
        } else { // hanya ngepassing _token
            return view('quiz.choosedifficulty', [
                'active_quiz' => "active",
                "difficulty" => Difficulty::all()
            ]);
        }
    }

    public function check(Request $request)
    {
        $data = $request->all();
        // cek jika isi dari request dari pilihan difficulty
        if (sizeof($data) < 5) {
            $quiz = new QuizController();
            $returnedRequest = new Request([
                '_token' => $data['_token'],
                'difficulty' => $data['difficulty']
            ]);
            return $quiz->difficulty($returnedRequest);
        }
        $point = (int) $data['point'];
        $health = (int) $data['health'];
        $nomor = (int) $data['nomor'] + 1;
        $benar = (int) $data['benar'];
        $difficulty = $data['difficulty'];
        $tambahHealth = false;
        if ($data['correct']) {
            $point += 10;
            $benar++;
            if($benar % 5 == 0) {
                $health++;
                $tambahHealth = true;
            }
        } else {
            $health--;
        }

        if ($health == 0) { // game over
            $quiz = new QuizController();
            $returnedRequest = new Request([
                '_token' => $data['_token'],
                "difficulty" => $difficulty,
                'point' => $point,
                "nomor" => $nomor,
                'benar' => $benar
            ]);
            return $quiz->submit($request);
        } else {
            $quiz = new QuizController();
            $returnedRequest = new Request([
                '_token' => $data['_token'],
                "difficulty" => $difficulty,
                'point' => $point,
                'health' => $health,
                "nomor" => $nomor,
                'benar' => $benar
            ]);
            
            if ($data['correct']) {
                if ($tambahHealth) {
                    return redirect()->back()->with('correct', "Jawaban Anda benar! +10 poin dan +1 nyawa.")->with('checkpoint', $returnedRequest);
                }
                else {
                    return redirect()->back()->with('correct', "Jawaban Anda benar! +10 poin.")->with('checkpoint', $returnedRequest);
                }
            } else {
                if ($data['timesup']) {
                    return redirect()->back()->with('wrong', "Waktu habis! -1 nyawa.")->with('checkpoint', $returnedRequest);
                }
                else {
                    return redirect()->back()->with('wrong', "Jawaban Anda salah! -1 nyawa.")->with('checkpoint', $returnedRequest);
                }
            }
        }
    }

    public function submit(Request $request)
    {
        $data = $request->all();

        $point = (int) $data['point'];
        $nomor = (int) $data['nomor'];
        $benar = (int) $data['benar'];
        $difficulty = $data['difficulty'];

        $akurasi = 0;
        if ($nomor > 1) {
            $akurasi = ceil($benar * 100 / $nomor);
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
            'table' => 'bio11_users_histories',
            'creator' => Auth::user()->id,
            'path' => "QuizController@result",
            'desc' => "Create new data in User History",
            'ip' => $ip->getIp()
        ]);

        $pointDifficulty = $point;
        switch ($difficulty) {
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
            'path' => "QuizController@result",
            'desc' => "Update user total point in User Detail",
            'ip' => $ip->getIp()
        ]);

        $returnedRequest = new Request([
            '_token' => $data['_token'],
            'difficulty' => $difficulty,
            'point' => $point,
            'nomor' => $nomor,
            'benar' => $benar,
            'akurasi' => $akurasi,
            'pointDifficulty' => $pointDifficulty
        ]);
        return redirect()->back()->with('result', $returnedRequest);
    }

    public function result(Request $request) {
        $data = $request->all();

        $point = (int) $data['point'];
        $nomor = (int) $data['nomor'];
        $benar = (int) $data['benar'];
        $difficulty = $data['difficulty'];
        $akurasi = $data['akurasi'];
        $pointDifficulty = $data['pointDifficulty'];

        return view('quiz.quizresult', [
            'active_quiz' => "active",
            'totalpoint' => $pointDifficulty,
            'difficulty' => Difficulty::where('id', $difficulty)->get()->first()['difficulty'],
            'point' => $point,
            'nomor' => $nomor,
            'benar' => $benar,
            'akurasi' => $akurasi
        ]);
    }
}
