<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScorePersonal extends Model
{
    //
    protected $table = 'scores_personal';

    protected $fillable = [
        'id',
        'i1',
        'i2',
        'ii1',
        'ii2',
        'ii3',
        'ii4',
        'ii5',
        'iii1',
        'iii2',
        'iii3',
        'iii4',
        'iva1',
        'iva2',
        'iva3',	'ivb1',	'ivb2',	'ivb3',	'ivc1',	'ivc2',
        'ivd1',	'ivd2',	'ivd3',	'ive1',	'ive2',	'ive3',	'v1','v2','v3','v4','user_id'
        ];
    public function User(){
        $this->belongsTo('App\User');
    }
}
