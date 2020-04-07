<?php
namespace App\Services\Admin;
use App\ScoreFaculty;
class ScoreFacultyService
{
    public function save(array $data){
        return ScoreFaculty::create(
            [
                'i1'=>$data['i1'],
                'ii1'=>$data['ii1'],
                'ii2'=>$data['ii2'],
                'iii1'=>$data['iii1'],
                'iii2'=>$data['iii2'],
                'iii3'=>$data['iii3'],
                'iii4'=>$data['iii4'],
                'iv1'=>$data['iv1'],
                'iv2'=>$data['iv2'],
                'iv3'=>$data['iv3'],
                'v1'=>$data['v1'],
                'v2'=>$data['v2'],
                'v3'=>$data['v3'],
                'v4'=>$data['v4'],
                'v5'=>$data['v5'],
                'vi1'=>$data['vi1'],
                'vi2'=>$data['vi2'],
                'vi3'=>$data['vi3'],
                'vii1'=>$data['vii1'],
                'vii2'=>$data['vii2'],
            ]
        );
    }

}
