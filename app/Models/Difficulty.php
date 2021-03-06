<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Difficulty extends Model
{
    use HasFactory;

    protected $table = 'bio11_difficulties';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'difficulty',
        'health',
    ];
    
    public function histories() {
        return $this->hasMany(UserHistory::class, 'difficulty', 'id');
    }
    
    public function soals() {
        return $this->hasMany(SoalDifficulty::class, 'difficulty_id', 'id');
    }
}
