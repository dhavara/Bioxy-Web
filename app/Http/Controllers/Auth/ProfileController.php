<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function profileGet() // saat kita mengetikkan /profile di uri
    {
        return view('profile', [
            "user" => User::findOrFail(Auth::user()->id),
            "detail" => UserDetail::where('user_id', Auth::user()->id)->get()->first()
        ]);
    }
    public function profilePost() // saat kita ngeklik profile
    {
        return redirect('/profile');
    }
}
