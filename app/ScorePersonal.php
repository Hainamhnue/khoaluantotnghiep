<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScorePersonal extends Model
{
    //
    public function User(){
        $this->belongsTo('App\User');
    }
}
