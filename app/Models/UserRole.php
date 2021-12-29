<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    protected $table = 'bio11_users_roles';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'role_id'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function role() {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }
}
