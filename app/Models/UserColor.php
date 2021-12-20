<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserColor extends Model
{
    use HasFactory;

    protected $table = 'bio11_users_colors';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'color_id'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function item() {
        return $this->belongsTo(Color::class, 'color_id', 'id');
    }

}
