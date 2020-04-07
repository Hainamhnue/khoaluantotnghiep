<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InforFaculty extends Model
{
    //
    protected $table = 'infor_faculty';
    protected $fillable = ['id','name','address','email','phone','image','introduction'];
    protected $primaryKey = 'id';

    public function User(){
        $this->belongsTo('App\User');
    }
    public function ScoreFaculty(){
        $this->hasMany('App\ScoreFaculty');
    }
    public function ScoreFacultyTransgress(){
        $this->hasMany('App\ScoreFacultyTransgress');
    }
}
