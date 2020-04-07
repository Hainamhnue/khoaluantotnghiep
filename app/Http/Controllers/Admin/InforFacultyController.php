<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Admin\InforFacultyService;

class InforFacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $InforFacultyService;
    public function __construct(InforFacultyService $InforFacultyService)
    {
        $this->InforFacultyService = $InforFacultyService;
    }

    public function index()
    {
        //
        $infor = $this->InforFacultyService->getAll();
        return view('admin.profile',compact('infor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $infor = $this->InforFacultyService->findById($id);
        return view('admin.update-profile',compact('infor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $infor = $this->InforFacultyService->findById($id);
        if($request->hasFile('image')){
            if(file_exists($infor->image)){
                unlink('public/images'.$infor->image);
            }
            $getImg = '';
            $image = $request->image;
            $getImg = time().'_'.$image->getClientOriginalName();
            $image->move('public/images/',$getImg);
            $this->InforFacultyService->save([
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'address'=>$request->address,
                'introduction'=>$request->introduction,
                'image'=>$getImg
            ],$id);
            return redirect()->route('profile.index');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
