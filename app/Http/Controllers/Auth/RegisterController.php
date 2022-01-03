<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Log;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\UserRole;
use App\Models\UserTitle;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::PROFILE;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'unique:bio11_users', 'max:255', 'alpha_dash'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:bio11_users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'school' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'birthdate' => ['required', 'date', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'username' => $data['username'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'school' => $data['school'],
            'city' => $data['city'],
            'birthdate' => strtotime($data['birthdate'])
        ]);

        UserDetail::create([
            'user_id' => User::firstWhere('username', $data['username'])['id'],
            'user_title' => 1
        ]);

        UserRole::create([
            'user_id' => User::firstWhere('username', $data['username'])['id'],
            'role_id' => 2
        ]);

        UserTitle::create([
            'user_id' => User::firstWhere('username', $data['username'])['id'],
            'title_id' => 1
        ]);

        $ip = new IpController();
        Log::create([
            'table'=>'bio11_users',
            'creator'=> User::firstWhere('username', $data['username'])['id'], // Auth::user()->id
            'path' => "RegisterController@create",
            'desc' => "Create new data in User",
            'ip' => $ip->getIp()
        ]);

        Log::create([
            'table'=>'bio11_users_details',
            'creator'=> User::firstWhere('username', $data['username'])['id'],
            'path' => "RegisterController@create",
            'desc' => "Create new data in User Details",
            'ip' => $ip->getIp()
        ]);

        Log::create([
            'table'=>'bio11_users_roles',
            'creator'=> User::firstWhere('username', $data['username'])['id'],
            'path' => "RegisterController@create",
            'desc' => "Create new data in User Roles",
            'ip' => $ip->getIp()
        ]);

        Log::create([
            'table'=>'bio11_users_titles',
            'creator'=> User::firstWhere('username', $data['username'])['id'],
            'path' => "RegisterController@create",
            'desc' => "Create new data in User Titles",
            'ip' => $ip->getIp()
        ]);

        return $user;
    }
}
