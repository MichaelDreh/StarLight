<?php

namespace App\Http\Controllers;
use App\Question;
use Illuminate\Http\Request;
use App\User;
use App\Result;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->usertype == 'admin'){
            $questions = Question::all();
            $users = User::all();
            $usercount = count($users);
            $count = count($questions);
            return view('admin',['questioncount'=>$count,'usercount' => $usercount]);
        }
        $date = date('Y-m-d');
        // $usercompletedadaytest = Result::question()->where('day','=',1);
        $examdate = Question::where('schedulled_date','=',$date)->get();
        $examday = "";
        foreach($examdate as $day)
        {
            $examday = $day->day;
        }
        // UserEnrolled = UserEnrolled where user_id = authenticated user id ;
        // check if UserEnrolled != null on the front end 
        return view('home',['date'=>$date],['day'=>$examday]);
    }
}