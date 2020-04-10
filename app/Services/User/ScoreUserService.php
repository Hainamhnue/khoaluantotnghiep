<?php
namespace App\Services\User;
use App\ScorePersonal;
class ScoreUserService
{
    public function save(array $data, int $id = null){
        return ScorePersonal::updateOrCreate(
                [
                    'id'=>$id,
                ],
                [
                    'i1'=>$data['i1'],
                    'i2'=>$data['i2'],
                    'ii1'=>$data['ii1'],
                    'ii2'=>$data['ii2'],
                    'ii3'=>$data['ii3'],
                    'ii4'=>$data['ii4'],
                    'ii5'=>$data['ii5'],
                    'iii1'=>$data['iii1'],
                    'iii2'=>$data['iii2'],
                    'iii3'=>$data['iii3'],
                    'iii4'=>$data['iii4'],
                    'iva1'=>$data['iva1'],
                    'iva2'=>$data['iva2'],
                    'iva3'=>$data['iva3'],
                    'ivb1'=>$data['ivb1'],
                    'ivb2'=>$data['ivb2'],
                    'ivb3'=>$data['ivb3'],
                    'ivc1'=>$data['ivc1'],
                    'ivc2'=>$data['ivc2'],
                    'ivd1'=>$data['ivd1'],
                    'ivd2'=>$data['ivd2'],
                    'ivd3'=>$data['ivd3'],
                    'ive1'=>$data['ive1'],
                    'ive2'=>$data['ive2'],
                    'ive3'=>$data['ive3'],
                    'v1'=>$data['v1'],
                    'v2'=>$data['v2'],
                    'v3'=>$data['v3'],
                    'v4'=>$data['v4'],
                    'user_id'=>$data['user_id']
                ]);

    }
    public function findById($id){
        return ScorePersonal::find($id);
    }
    public function delete($id){
        return ScorePersonal::destroy($id);

    }

}
