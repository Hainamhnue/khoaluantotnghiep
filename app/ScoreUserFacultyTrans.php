<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScoreUserFacultyTrans extends Model
{
    //
    public function User(){
        $this->belongsTo('App\User');
    }
}
