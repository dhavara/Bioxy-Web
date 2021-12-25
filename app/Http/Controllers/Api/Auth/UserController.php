<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index() {
        $user = User::all();
        return [
            'message' => 'Sukses! Data telah diambil.',
            'user' => UserResource::collection($user)
        ];
    }

    public function show(int $id) {
        $user = User::all()->where('id', $id);
        return [
            'message' => 'Sukses! Data telah diambil.',
            'user' => UserResource::collection($user)
        ];
    }
}
