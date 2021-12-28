<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Auth\IpController;
use App\Http\Controllers\Controller;
use App\Http\Resources\SoalResource;
use App\Models\Difficulty;
use App\Models\Log;
use App\Models\Soal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SoalController extends Controller
{
    //
    public function index() {
        $soal = Soal::all();

        $ip = new IpController();
        Log::create([
            'table' => 'bio11_soals',
            'creator' => Auth::user()->id,
            'path' => "Api\SoalController@index",
            'desc' => "View all data in Soal",
            'ip' => $ip->getIp()
        ]);

        return [
            'message' => 'Sukses! Data telah diambil.',
            'soals' => SoalResource::collection($soal)
        ];
    }

    public function show(int $id) {
        $soal = Soal::all()->where('id', $id);

        $ip = new IpController();
        Log::create([
            'table' => 'bio11_soals',
            'creator' => Auth::user()->id,
            'path' => "Api\SoalController@show",
            'desc' => "Show data with id ".$id." in Soal",
            'ip' => $ip->getIp()
        ]);

        return [
            'message' => 'Sukses! Data telah diambil.',
            'soals' => SoalResource::collection($soal)
        ];
    }
}
