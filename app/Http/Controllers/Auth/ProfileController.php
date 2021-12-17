<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Log;
use App\Models\Title;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\UserHistory;
use Carbon\Carbon;
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
            "histories" => UserHistory::where('user_id', Auth::user()->id)->get()->sortByDesc('point')
        ]);
    }
    public function profilePost() // saat kita ngeklik profile
    {
        return redirect('/profile');
    }

    // public function index()
    // {
    //     $profiles = User::all();
    //     return view('bioxyprof', compact('profiles'));
    // }

    public function edit()
    {
        
        $user = User::findOrFail(Auth::user()->id);
        return view('editprofile', [
            'user' => $user
        ]);
    }

    public function update(Request $request)
    {
        $user = User::findOrFail($request->id);

        $user->update([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'school' => $request->school,
            'city' => $request->city,
            'birthdate' => strtotime($request['birthdate'])
        ]);

        $ip = new IpController();
        Log::create([
            'table' => 'bio11_users',
            'creator' => Auth::user()->id,
            'path' => "ProfileController@update",
            'desc' => "Update data in User",
            'ip' => $ip->getIp()
        ]);
        return redirect('/profile');
    }
}
