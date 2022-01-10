<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
    }

    public function about()
    {
        return view('about', [
            'active_about' => "active",
            "admins" => Role::where('id', 2)->first()->users->where('id', '<>', 1)
        ]);
    }
}
