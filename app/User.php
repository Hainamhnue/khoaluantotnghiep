<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','bomon','password','image','phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $table  = 'users';

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public  function  InforFaculty(){
        $this->hasMany('App\InforFaculty');
    }
    public function ScorePersonal(){
        $this->hasMany('App\ScorePersonal');
    }
    public function ScorePersonalTransgress(){
        $this->hasMany('App\ScorePersonalTransgress');
    }
    public function ScoreUserFaculty(){
        $this->hasMany('App\ScoreUserFaculty');
    }
    public function ScoreUserFacultyTrans(){
        $this->hasMany('App\ScoreUserFacultyTrans');
    }
}
