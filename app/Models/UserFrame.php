<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFrame extends Model
{
    use HasFactory;

    protected $table = 'bio11_users_frames';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'frame_id'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function item() {
        return $this->belongsTo(Frame::class, 'frame_id', 'id');
    }

}
