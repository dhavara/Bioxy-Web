<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    protected $table = 'bio11_users_details';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'user_image',
        'point',
        'user_color',
        'user_frame',
        'user_title',
        'is_login',
        'is_active'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function color() {
        return $this->belongsTo(Color::class, 'user_color', 'id');
    }
    public function frame() {
        return $this->belongsTo(Frame::class, 'user_frame', 'id');
    }
    public function title() {
        return $this->belongsTo(Title::class, 'user_title', 'id');
    }
}
