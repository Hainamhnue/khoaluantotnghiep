<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Admin\ScoreFacultyService;

class ScoreFacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $scoreFacultyService;
    public function __construct(ScoreFacultyService $scoreFacultyService)
    {
        $this->scoreFacultyService = $scoreFacultyService;
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
        return view('admin.danhgiadonvi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->scoreFacultyService->save([
            'i1'=>$request->i1,
            'ii1'=>$request->ii1,
            'ii2'=>$request->ii2,
            'iii1'=>$request->iii1,
            'iii2'=>$request->iii2,
            'iii3'=>$request->iii3,
            'iii4'=>$request->iii4,
            'iv1'=>$request->iv1,
            'iv2'=>$request->iv2,
            'iv3'=>$request->iv3,
            'v1'=>$request->v1,
            'v2'=>$request->v2,
            'v3'=>$request->v3,
            'v4'=>$request->v4,
            'v5'=>$request->v5,
            'vi1'=>$request->vi1,
            'vi2'=>$request->vi2,
            'vi3'=>$request->vi3,
            'vii1'=>$request->vii1,
            'vii2'=>$request->vii2,
        ]);
       //$this->scoreFacultyService->save($data);
       return redirect()->route('score-transgress.create');
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
