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
        $ids = [6,3,5,4];
        $admins = Role::where('id', 2)->first()->users->where('id', '<>', 1);
        $sorted = $admins->sortBy(function($admins) use ($ids) {
            return array_search($admins->user_id, $ids);
        });
        return view('about', [
            'active_about' => "active",
            "admins" => $sorted
        ]);
    }
}
