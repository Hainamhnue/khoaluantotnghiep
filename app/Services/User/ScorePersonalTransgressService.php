<?php
namespace App\Services\User;
use App\ScorePersonalTransgress;
class ScorePersonalTransgressService
{
    public function save(array $data, int $id = null){
        return ScorePersonalTransgress::updateOrCreate(
            [
                'id'=>$id
            ],
            [
                'tras1'=>$data['tras1'],
                'tras2'=>$data['tras2'],
                'tras3'=>$data['tras3'],
                'tras4'=>$data['tras4'],
                'tras5'=>$data['tras5'],
                'tras6'=>$data['tras6'],
                'tras7'=>$data['tras7'],
                'tras8'=>$data['tras8'],
                'tras9'=>$data['tras9'],
                'tras10'=>$data['tras10'],
                'tras11'=>$data['tras11'],
                'tras12'=>$data['tras12'],
                'tras13'=>$data['tras13'],
                'user_id'=>$data['user_id'],
            ]
        );
    }
}
