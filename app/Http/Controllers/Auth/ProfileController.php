<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\UserHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    //
    public function profileGet() // saat kita mengetikkan /profile di uri
    {
        return view('profile', [
            "user" => User::findOrFail(Auth::user()->id),
            "detail" => UserDetail::where('user_id', Auth::user()->id)->get()->first(),
            "history" => UserHistory::where('user_id', Auth::user()->id)->get()->sortByDesc('point')
        ]);
    }
    public function profilePost() // saat kita ngeklik profile
    {
        return redirect('/profile');
    }

    public function index()
    {
        $profiles = User::all();
        return view('bioxyprof', compact('profiles'));
    }

    public function edit($profile_code)
    {
        $profile = User::findOrFail($profile_code);
        return view('editprofile', compact('profile'));
    }

    public function update(Request $request, $profile_code)
    {
        $code = Str::upper(Str::substr($request->fullname, 0, 3));
        $profile = User::findOrFail($profile_code);

        $profile->update([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'school' => $request->school,
            'city' => $request->city,
            'birthdate' => $request->birthdate
        ]);
        return redirect(route('bioxyprof.index'));
    }
}
