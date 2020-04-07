<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ScoreFacultyTransgress;
use App\Services\Admin\ScoreTransgressFacultyService;

class ScoreTransgressFacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $ScoreTransgressFacultyService;
    public function __construct(ScoreTransgressFacultyService $ScoreTransgressFacultyService)
    {
        $this->ScoreTransgressFacultyService = $ScoreTransgressFacultyService;
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.diemvipham');
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
        $this->ScoreTransgressFacultyService->save([
            'trans1'=>$request->trans1,
            'trans2'=>$request->trans2,
            'trans3'=>$request->trans3,
            'trans4'=>$request->trans4,
            'trans5'=>$request->trans5,
            'trans6'=>$request->trans6,
            'trans7'=>$request->trans7,
            'trans8'=>$request->trans8,
            'trans9'=>$request->trans9,
            'trans10'=>$request->trans10,
            'trans11'=>$request->trans11,
            'trans12'=>$request->trans12,
            'trans13'=>$request->trans13,
            'trans14'=>$request->trans14,
            'trans15'=>$request->trans15,
            'trans16'=>$request->trans16,
            'trans17'=>$request->trans17,
            'trans18'=>$request->trans18,
            'trans19'=>$request->trans19,
        ]);
        return view('admin.admin-home');

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
