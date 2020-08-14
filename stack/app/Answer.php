<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['answer', 'isvote', 'user_id', 'question_id'];

    protected $primarykey = "id";

    public function User()
    {
        return $table->belongsTo('App\User');
    }

    public function Question()
    {
        return $table->belongsTo('App\Question');
    }

}
