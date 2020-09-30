<?php

namespace App;
use App\Question;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = ['id','user_id','day','score'];

    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }
    
    public function question()
    {
        return $this->belongsTo('App\Question');
    }
}
