<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScorePersonalTransgress extends Model
{
    //
    public function User(){
        $this->belongsTo('App\User');
    }
}
