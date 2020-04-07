<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScoreFacultyTransgress extends Model
{
    //
    protected $table = 'scores_transgress';
    protected $fillable = [
        'trans1','trans2','trans3','trans4','trans5','trans6','trans7','trans8','trans9','trans10','trans11','trans12','trans13','trans14','trans15','trans16','trans17','trans18','trans19',
    ];
    public function InforFaculty(){
        $this->belongsTo('App\InforFaculty');
    }
}
