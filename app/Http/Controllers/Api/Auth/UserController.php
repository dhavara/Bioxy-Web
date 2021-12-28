<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Auth\IpController;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\Log;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function index() {
        $user = User::all();
        
        $ip = new IpController();
        Log::create([
            'table' => 'bio11_users',
            'creator' => Auth::user()->id,
            'path' => "Api\Auth\UserController@index",
            'desc' => "View all data in User",
            'ip' => $ip->getIp()
        ]);

        return [
            'message' => 'Sukses! Data telah diambil.',
            'users' => UserResource::collection($user)
        ];
    }

    public function show(int $id) {
        $user = User::all()->where('id', $id);
        
        $ip = new IpController();
        Log::create([
            'table' => 'bio11_users',
            'creator' => Auth::user()->id,
            'path' => "Api\Auth\UserController@index",
            'desc' => "Show data with id ".$id." in User",
            'ip' => $ip->getIp()
        ]);

        return [
            'message' => 'Sukses! Data telah diambil.',
            'users' => UserResource::collection($user)
        ];
    }
}
