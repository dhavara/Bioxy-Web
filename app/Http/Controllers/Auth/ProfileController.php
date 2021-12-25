<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Log;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\UserHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function show(int $id) // saat kita mengetikkan /profile di uri
    {
        $lastId = User::all()->sortByDesc('id')->first()['id'];
        if ($id == Auth::user()->id) {
            return redirect('/profile');
        }
        else if ($id > $lastId) {
            return redirect('/profile')->with('not-found', "Pengguna dengan ID ".$id." tidak ditemukan.");
        }

        return view('otherprofile', [
            "user" => User::findOrFail($id),
            "detail" => UserDetail::where('user_id', $id)->get()->first(),
            "histories" => UserHistory::where('user_id', $id)->get()->sortByDesc('point')
        ]);
    }

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
            'birthdate' => strtotime($request->birthdate)
        ]);

        $ip = new IpController();
        Log::create([
            'table' => 'bio11_users',
            'creator' => Auth::user()->id,
            'path' => "ProfileController@update",
            'desc' => "Update data in User",
            'ip' => $ip->getIp()
        ]);

        $img_name = null;
        $detail = UserDetail::findOrFail($request->id);
        if ($request->hasFile('img')) { // jika mengupload gambar
            if (file_exists('\img\user\\'.$detail->user_image)) {
                unlink(public_path().'\img\user\\'.$detail->user_image);
            }
            $image = $request->file('img');
            $img_name = $request->username .  '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/img/user');
            $image->move($destinationPath, $img_name);
        } 
        else { // jika tidak mengupload gambar dan mengganti nama
            if ($detail->user_image != null) {
                $extension = strrchr($detail->user_image, '.');
                $img_name = $request->username . $extension;
                rename(public_path().'\img\user\\' . $detail->user_image, public_path().'\img\user\\' . $img_name);
            }
        }

        if ($request->frame == 'null') {
            $frame = null;
        }
        else {
            $frame = $request->frame;
        }

        if ($request->color == 'null') {
            $color = null;
        }
        else {
            $color = $request->color;
        }

        $detail->update([
            'user_image' => $img_name,
            'user_title' => $request->title,
            'user_frame' => $frame,
            'user_color' => $color,
        ]);

        Log::create([
            'table' => 'bio11_users_details',
            'creator' => Auth::user()->id,
            'path' => "ProfileController@update",
            'desc' => "Update data in UserDetail",
            'ip' => $ip->getIp()
        ]);

        return redirect('profile')->with('status', 'Anda berhasil mengubah data profil Anda');
    }
}
