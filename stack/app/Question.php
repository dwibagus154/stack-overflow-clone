<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['question', 'description', 'concept', 'isvote', 'user_id'];

    protected $primaryKey = 'id';

    public function Answer()
    {
        return $table->hasMany('App\Answer', 'question_id');
    }
}
