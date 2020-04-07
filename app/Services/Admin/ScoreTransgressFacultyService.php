<?php
namespace App\Services\Admin;
use App\ScoreFacultyTransgress;
class ScoreTransgressFacultyService
{
    public function save(array $data){
        return ScoreFacultyTransgress::create([
            'trans1'=>$data['trans1'],
            'trans2'=>$data['trans2'],
            'trans3'=>$data['trans3'],
            'trans4'=>$data['trans4'],
            'trans5'=>$data['trans5'],
            'trans6'=>$data['trans6'],
            'trans7'=>$data['trans7'],
            'trans8'=>$data['trans8'],
            'trans9'=>$data['trans9'],
            'trans10'=>$data['trans10'],
            'trans11'=>$data['trans11'],
            'trans12'=>$data['trans12'],
            'trans13'=>$data['trans13'],
            'trans14'=>$data['trans14'],
            'trans15'=>$data['trans15'],
            'trans16'=>$data['trans16'],
            'trans17'=>$data['trans17'],
            'trans18'=>$data['trans18'],
            'trans19'=>$data['trans19'],
        ]);
    }
}
