<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
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
        $question->answer = json_decode($question->answer);
        return $question;        
    }

    // public static function getRandomQuestion(){
    //     $ans = ['Vinh','Ngu','Lon','Vcl'];

    //     static::insert([
    //         'question' => 'testing',
    //         'answer' => json_encode($ans),
    //         'correct_answer' => '1'
    //     ]);
    // }
}
