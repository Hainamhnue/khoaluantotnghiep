<?php
namespace App\Services\Admin;
use App\InforFaculty;
class InforFacultyService
{
    public function save(array $data, int $id = null){
        return InforFaculty::updateOrCreate(
            [
                'id'=>$id
            ],
            [
                'name'=>$data['name'],
                'email'=>$data['email'],
                'address'=>$data['address'],
                'phone'=>$data['phone'],
                'introduction'=>$data['introduction'],
                'image'=>$data['image']
            ]
        );
    }
    public function getAll($limit = 1){
        $infor = InforFaculty::query();
        return $infor->paginate($limit);
    }
    public function findById($id){
        return InforFaculty::find($id);
    }
}
