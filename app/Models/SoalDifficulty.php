<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalDifficulty extends Model
{
    use HasFactory;

    protected $table = 'bio11_soals_difficulties';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'soal_id',
        'difficulty_id',
    ];

    public function soal() {
        return $this->belongsTo(Soal::class, 'soal_id', 'id');
    }

    public function difficulty() {
        return $this->belongsTo(Difficulty::class, 'difficulty_id', 'id');
    }
}
