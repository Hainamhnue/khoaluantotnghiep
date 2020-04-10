<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScorePersonalTransgress extends Model
{
    //
    protected $table = 'scores_transgress_personal';

    protected $fillable = [
        'id',
        'tras1',
        'tras2',
        'tras3',
        'tras4',
        'tras5',
        'tras6',
        'tras7',
        'tras8',
        'tras9',
        'tras10',
        'tras11',
        'tras12',
        'tras13',
        'user_id'
    ];
    public function User(){
        $this->belongsTo('App\User');
    }
}
