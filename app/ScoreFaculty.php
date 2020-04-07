<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScoreFaculty extends Model
{
    //
    protected $table = 'scores';
    protected $fillable = [
        'i1','ii1','ii2','iii1','iii2','iii3','iii4','iv1',	'iv2','iv3','v1','v2','v3','v4','v5','vi1',	'vi2','vi3','vii1','vii2',
    ];
    public function InforFaculty(){
        return $this->belongsTo('App\InforFaculty');
    }
}
