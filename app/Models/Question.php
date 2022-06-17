<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    
    protected $table = "question";

    protected $fillable = ['id', 'question', 'answer', 'correct_answer'];

    public static function getAllQuestion(){
        $questions = static::get();
        return $questions;
    }

    public static function getRandomQuestion(){
        $question = static::inRandomOrder()->first();
        return $question;        
    }
}
