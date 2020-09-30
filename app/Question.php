<?php

namespace App;
use App\Result;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ["question","day","option_a","option_b","option_c","option_d","correct_answer","schedulled_date"];

    public function results()
    {
        return $this->hasMany('App\Result');
    }
}
