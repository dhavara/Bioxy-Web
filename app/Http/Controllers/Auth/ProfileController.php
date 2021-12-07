<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function profileGet()
    {
        return view('profile');
    }
    public function profilePost()
    {
        return redirect('/profile');
    }
}
