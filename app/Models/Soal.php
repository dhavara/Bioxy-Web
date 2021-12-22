<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;

    protected $table = 'bio11_soals';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'question',
        'soal_image',
        'answer_correct',
        'answer_1',
        'answer_2',
        'answer_3',
        'answer_4'
    ];
    
    public function difficulties() {
        return $this->hasMany(SoalDifficulty::class, 'soal_id', 'id');
    }
}
