<?php

namespace App\Http\Controllers;
use App\Result;
use Illuminate\Http\Request;
use App\Question ;

class ResultController extends Controller
{
    public function result(Request $input)
    {
        $date = date('Y-m-d');
        $answer = Question::where('schedulled_date','=',$date)->get();
        $correct_answer = array(""=>"");
        $inputasarray = [];
        foreach($input->all() as $inp)
        {
            $inputasarray[] = $inp;
        }
        foreach($answer as $ans)
        {
            array_push($correct_answer,$ans->correct_answer);
        }
        $user_correctanswers = array_intersect($correct_answer,$inputasarray);
        $result = Result::create([
                    'user_id' => auth()->user()->id,
                    'day' => 'day_one',
                    'score' => count($user_correctanswers)
                ]);

        if($result)
        {
            return count($user_correctanswers);
        }
        else
        {
            return "Error Occured while processing your request";
        }
    }

}
