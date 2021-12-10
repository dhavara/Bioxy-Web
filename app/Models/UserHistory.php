<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHistory extends Model
{
    use HasFactory;

    protected $table = 'bio11_users_histories';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'difficulty',
        'point',
        'accuracy',
        'total_correct',
        'total_question'
    ];

    public function history() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function difficultData() {
        return $this->belongsTo(Difficulty::class, 'difficulty', 'id');
    }

}
