<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Auth\IpController;
use App\Http\Controllers\Controller;
use App\Http\Resources\FrameResource;
use App\Models\Frame;
use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrameController extends Controller
{
    //
    public function index() {
        $frame = Frame::all();

        $ip = new IpController();
        Log::create([
            'table' => 'bio11_frames',
            'creator' => Auth::user()->id,
            'path' => "Api\FrameController@index",
            'desc' => "View all data in Frame",
            'ip' => $ip->getIp()
        ]);

        return [
            'message' => 'Sukses! Data telah diambil.',
            'frames' => FrameResource::collection($frame)
        ];
    }

    public function show(int $id) {
        $frame = Frame::all()->where('id', $id);

        $ip = new IpController();
        Log::create([
            'table' => 'bio11_frames',
            'creator' => Auth::user()->id,
            'path' => "Api\FrameController@show",
            'desc' => "Show data with id ".$id." in Frame",
            'ip' => $ip->getIp()
        ]);

        return [
            'message' => 'Sukses! Data telah diambil.',
            'frames' => FrameResource::collection($frame)
        ];
    }
}
