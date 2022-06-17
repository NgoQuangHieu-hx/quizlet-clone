<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use DB;

class QuestionController extends Controller
{
    public static function getAllQuestions(){
        return Question::getAllQuestion();
    } 

    public static function getRandomQuestion(){
        return Question::getRandomQuestion();
    }
}
