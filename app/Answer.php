<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = array('bengali_meaning');

    public function question()
    {
        return $this->belongsTo('App\Question');
    }
}
