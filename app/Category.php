<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = array('id', 'category_name', );
    public function questions()
    {
        return $this->hasMany('App\Question');
    }
    public function lessons()
    {
        return $this->hasMany('App\Lesson');
    }
}
