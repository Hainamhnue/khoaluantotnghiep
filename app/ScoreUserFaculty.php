<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScoreUserFaculty extends Model
{
    //
    public function User(){
        $this->belongsTo('App\User');
    }
}
