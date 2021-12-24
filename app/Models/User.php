<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\Bridge\AccessToken;
use Laravel\Passport\Token;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'bio11_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
        'school',
        'city',
        'birthdate'
    ];

    public function detail() {
        return $this->hasOne(UserDetail::class, 'user_id', 'id');
    }

    public function histories() {
        return $this->hasMany(UserHistory::class, 'user_id', 'id');
    }

    public function titles() {
        return $this->hasMany(UserTitle::class, 'user_id', 'id');
    }

    public function frames() {
        return $this->hasMany(UserFrame::class, 'user_id', 'id');
    }

    public function colors() {
        return $this->hasMany(UserColor::class, 'user_id', 'id');
    }

    public function token() {
        return $this->hasMany(Token::class, 'user_id', 'id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function findForPassport($username) {
        return self::where('username', $username)->first(); // change column name whatever you use in credentials
     }
}
