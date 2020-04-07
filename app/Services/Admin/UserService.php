<?php
namespace App\Services\Admin;
use App\User;
class UserService
{
    public function save(array $data, int $id = null){
        return User::updateOrCreate(
            [
                'id'=>$id,
            ],
            [
                'name'=>$data['name'],
                'email'=>$data['email'],
                'password'=>bcrypt('12345678'),
                'bomon'=> $data['bomon'],

            ]);
    }
    public function getAll(){
        return User::all();
    }

    public function findById($id){
        return User::find($id);
    }
    public function delete($id){
        return User::destroy($id);
    }
}
